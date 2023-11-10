<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ParceiroPatrocinador;

class ParceiroPatrocinadorController extends Controller
{

    private $totalPage = 20;

    public function index(){
        $itens = ParceiroPatrocinador::paginate($this->totalPage);
        return view('admin.parceiro-patrocinador.index', compact('itens'));
    }

    public function create(){
        return view('admin.parceiro-patrocinador.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome_razao_social' => 'required',
            'cpf_cnpj' => 'required',
            'email' => 'required',
        ]);

        $dataForm = [
            'nome_razao_social' => $request->nome_razao_social,
            'cpf_cnpj' => $request->cpf_cnpj,
            'email' => $request->email,
            'site' => $request->site,
            'patrocinador' => $request->patrocinador,
            'parceiro' => $request->parceiro,
            'responsavel_nome' => $request->responsavel_nome,
            'responsavel_email' => $request->responsavel_email,
            'responsavel_telefone' => $request->responsavel_telefone
        ];

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $nome = "parceiro-patrocinador".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('logo')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('logo')->storeAs('parceiro-patrocinador', $nome_imagem, 'public');
            $dataForm['logo'] = $path;
        }

        $plano = ParceiroPatrocinador::create($dataForm);
        return redirect('/parceiro-patrocinador')->with('success', 'Dados inseridos com sucesso!');
    }

    public function show($id){
        $parceiro_patrocinador = ParceiroPatrocinador::findOrFail($id);
        return view('admin.parceiro-patrocinador.show', compact('parceiro_patrocinador'));
    }

    public function edit($id){
        $parceiro_patrocinador = ParceiroPatrocinador::findOrFail($id);
        return view('admin.parceiro-patrocinador.edit', compact('parceiro_patrocinador'));
    }

    public function update(Request $request, $id){

        $parceiro_patrocinador = ParceiroPatrocinador::findOrFail($id);

        $validatedData = $request->validate([
            'nome_razao_social' => 'required',
            'cpf_cnpj' => 'required',
            'email' => 'required',
        ]);

        $dataForm = [
            'nome_razao_social' => $request->nome_razao_social,
            'cpf_cnpj' => $request->cpf_cnpj,
            'email' => $request->email,
            'site' => $request->site,
            'patrocinador' => $request->patrocinador,
            'parceiro' => $request->parceiro,
            'responsavel_nome' => $request->responsavel_nome,
            'responsavel_email' => $request->responsavel_email,
            'responsavel_telefone' => $request->responsavel_telefone
        ];

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $nome = "parceiro-patrocinador".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('logo')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('logo')->storeAs('parceiro-patrocinador', $nome_imagem, 'public');
            $dataForm['logo'] = $path;
        }else{
            $dataForm['logo'] = $parceiro_patrocinador->logo;
        }

         $parceiro_patrocinador = ParceiroPatrocinador::whereId($id)->update($dataForm);
         return redirect('/parceiro-patrocinador')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id){
        $parceiro_patrocinador = ParceiroPatrocinador::findOrFail($id);
        //dd($faq);
        $parceiro_patrocinador->delete();
        return redirect('/parceiro-patrocinador')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, ParceiroPatrocinador $parceiro_patrocinador){
        $dataForm = $request->all();
        $itens = $parceiro_patrocinador->search($dataForm, $this->totalPage);
        if (!$itens) {
            return redirect('/parceiro-patrocinador')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.parceiro-patrocinador.index', compact('itens', 'dataForm'));
    }
}
