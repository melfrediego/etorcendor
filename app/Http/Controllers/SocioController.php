<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Mail;

use App\Models\Socio;
use App\Models\Pedido;
use App\Models\Mensalidade;
use App\Models\Estado;
use App\Models\Cidade;
use App\User;

class SocioController extends Controller
{
    private $totalPage = 20;

    public function index(){
    //   $socios = Socio::where('id', '>', 9)->paginate($this->totalPage);
      $socios = Socio::paginate($this->totalPage);
      return view('admin.socio.index', compact(['socios']));
    }

    public function create(){
      return view('admin.socio.create');
    }

    public function store(Request $request){
        //return redirect('/app/pedidos')->with('success', 'Dados inseridos com sucesso!');
   }

   public function show($id){
      $socio = Socio::findOrFail($id);
      $pedido = Pedido::where('socio_id', $id)->get()->first();
      $mensalidades = Mensalidade::where('pedido_id', $pedido->id)->orderBy('numero_mensalidade','ASC')->get();
      return view('admin.socio.show', compact('socio', 'pedido', 'mensalidades'));
   }

   public function edit($id){
       $socio = Socio::findOrFail($id);
       $pedido = Pedido::where('socio_id', $id)->get()->first();
       $mensalidades = Mensalidade::where('pedido_id', $pedido->id)->orderBy('numero_mensalidade','ASC')->get();
       $estados = Estado::all();
       $cidades = Cidade::all();

       // dd($estados);
       return view('admin.socio.edit', compact('socio', 'pedido', 'mensalidades', 'estados', 'cidades'));
   }

   public function update(Request $request, $id){

       // dd($request->all());

       $validatedData = Validator::make($request->all(), [
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'estado_civil' => 'required',
            'local_retirada_kit' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
        ]);

        $dataForm = [
            'nome' => $request->nome,
            'cpf' => $this->limpaCaracteresEspeciais($request->cpf),
            'telefone' => $this->limpaCaracteresEspeciais($request->telefone),
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'estado_civil' => $request->estado_civil,
            'local_retirada_kit' => $request->local_retirada_kit,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'complemento' => $request->complemento,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'estado' => $request->estado,
            'cidade' => $request->cidade
        ];

        //dd($dataForm);

        $socio_update = Socio::whereId($id)->update($dataForm);


        if ($socio_update) {
            // Altereando dados na tabela User//Inserindo Usuario
            $user = User::where('socio_id', $id)->update([
                'name' => $request->nome,
                 'email' => $request->email,
            ]);
        }

        return redirect('/socio')->with('success', 'Dados atulizados com sucesso!');
   }

   public function destroy(Request $request, $id){

   }

    public function search(Request $request, Socio $socio){
        $dataForm = $request->all();
        $socios = $socio->search($dataForm, $this->totalPage);
        if (!$socios) {
            return redirect('/socios')->with('error', 'Não encontramos nenhuma Socio com os termos informados!');
        }
        return view('admin.socio.index', compact('socios', 'dataForm'));
    }


    //Ativação manual do socio
    public function ativar(Socio $socio ,$id){
        $socio = Socio::find($id);
        if ($socio == null) {
            return response()->json('Socio nao encontrado!', 400);
        }

        //Verificar se existe a menos 1 mensalidade paga
        //$pedido_socio = Pedido::where('socio_id', $id);

        $dataForm = [
            'ativo' => 'S'
        ];
        $socio_update = Socio::whereId($id)->update($dataForm);

        //Verificar se existe alguma solicitacao de carteira para socio se NAO envia uma solicitacao

        return response()->json('Socio ativado com sucesso e solicitação de carteira na fila', 200);
    }

    //Geração de senha com envio de email
    public function gera_senha(Socio $socio ,$id){
        $socio = Socio::findOrFail($id);
        $user = User::where('socio_id', $id)->first();

        // return response()->json($user->email, 500);
        // exit;

        //Recendo a senha gerada automaticamente
        $nova_senha = $this->cript_senha();

        //Enviar email com Senha descriptografada
        $this->envia_email_senha($user, $nova_senha);

        //Criptografando senha com bcrypt
        $senha_crypt = bcrypt($nova_senha);

        //Altera senha na tabela de socios
        $dataForm = ['senha' => $senha_crypt];
        $update_senha_socio = Socio::whereId($id)->update($dataForm);

        if (!$update_senha_socio) {
            return response()->json('Erro ao alterar senha socio!', 500);
        }

        //Altera senha na tabela de usuarios
        $dataFormUser = ['password' => $senha_crypt];
        $update_senha_usuario = User::whereId($user->id)->update($dataFormUser);

        if (!$update_senha_usuario) {
            return response()->json('Erro ao alterar senha usuario!', 500);
        }

        return response()->json('Uma nova senha foi gerada pelo sistema e foi enviado um email para usuario!', 200);
    }

    private function cript_senha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false){
        // Caracteres de cada tipo
        $lmin = 'abcdefghijklmnopqrstuvwxyz';
        $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';
        $simb = '!@#$%*-';
        // Variáveis internas
        $retorno = '';
        $caracteres = '';
        // Agrupamos todos os caracteres que poderão ser utilizados
        $caracteres .= $lmin;
        $caracteres .= $num;
        if ($maiusculas) $caracteres .= $num;
        if ($numeros) $caracteres .= $num;
        // if ($simbolos) $caracteres .= $simb;
        if ($simbolos) $caracteres .= $num;
        // Calculamos o total de caracteres possíveis
        $len = strlen($caracteres);
        for ($n = 1; $n <= $tamanho; $n++) {
            // Criamos um número aleatório de 1 até $len para pegar um dos caracteres
            $rand = mt_rand(1, $len);
            // Concatenamos um dos caracteres na variável $retorno
            $retorno .= $caracteres[$rand-1];
        }
        return $retorno;
    }


    private function envia_email_senha($user, $nova_senha){

        // Mail::send('email.boas_vindas', ["nome" => "Torcedor Teste"], function($m){
        //    $m->subject('Socio Eterno Campeao - Bem Vindo');
        //    $m->to('melfre33@gmail.com');//email para envio
        //    $m->from('nao-responda@socioeternocampeao.com.br');
        // });

        // $user = User::findOrFail($id);

        // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });

        return Mail::send('email.gera_senha', ["user" => $user, "nova_senha" => $nova_senha ], function($m) use ($user){
           $m->subject('Senha Acesso');
           $m->to($user->email);//email para envio
        });
    }

    public function get_cidade($id_estado){
        $cidades = Cidade::where('estado_id', '=', $id_estado)->get(['id','nome']);
        return response()->json($cidades);
    }

    private function limpaCaracteresEspeciais($valor){
        $valor = trim($valor);
        $valor = str_replace(".", "", $valor);
        $valor = str_replace(",", "", $valor);
        $valor = str_replace("-", "", $valor);
        $valor = str_replace("/", "", $valor);
        $valor = str_replace("(", "", $valor);
        $valor = str_replace(")", "", $valor);
        $valor = str_replace(" ", "", $valor);
        $valor = str_replace("  ", "", $valor);
        return $valor;
    }

}
