<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plano;

class PlanoController extends Controller
{
    private $totalPage = 20;

    public function index(){
        $itens = Plano::paginate($this->totalPage);
        return view('admin.plano.index', compact('itens'));
    }

    public function create(){
        return view('admin.plano.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
            'ativo' => 'required',
            'imagem_carteira_frente' => 'required',
        ]);

        $dataForm = [
            'nome' => $request->nome,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'ativo' => $request->ativo
        ];

        if ($request->hasFile('imagem_carteira_frente') && $request->file('imagem_carteira_frente')->isValid()) {
            $nome = "plano".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('imagem_carteira_frente')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('imagem_carteira_frente')->storeAs('planos', $nome_imagem, 'public');
            $dataForm['imagem_carteira_frente'] = $path;
        }

        if ($request->hasFile('imagem_carteira_verso') && $request->file('imagem_carteira_verso')->isValid()) {
            $nome = "plano".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('imagem_carteira_verso')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('imagem_carteira_verso')->storeAs('planos', $nome_imagem, 'public');
            $dataForm['imagem_carteira_verso'] = $path;
        }

        $plano = Plano::create($dataForm);
        return redirect('/plano')->with('success', 'Dados inseridos com sucesso!');
    }

    public function show($id){
        $plano = Plano::findOrFail($id);
        return view('admin.plano.show', compact('plano'));
    }

    public function edit($id){
        $plano = Plano::findOrFail($id);
        return view('admin.plano.edit', compact('plano'));
    }

    public function update(Request $request, $id){

        $plano = Plano::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
            'ativo' => 'required',
        ]);

        $dataForm = [
            'nome' => $request->nome,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'ativo' => $request->ativo
        ];

        if ($request->hasFile('imagem_carteira_frente') && $request->file('imagem_carteira_frente')->isValid()) {
            $nome = "plano".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('imagem_carteira_frente')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('imagem_carteira_frente')->storeAs('planos', $nome_imagem, 'public');
            $dataForm['imagem_carteira_frente'] = $path;
        }else{
            $dataForm['imagem_carteira_frente'] = $plano->imagem_carteira_frente;
        }

        if ($request->hasFile('imagem_carteira_verso') && $request->file('imagem_carteira_verso')->isValid()) {
            $nome = "plano".uniqid(date('HisYmd')).rand();
            $extensao = $request->file('imagem_carteira_verso')->getClientOriginalExtension();
            $nome_imagem = "{$nome}.{$extensao}";
            $path = $request->file('imagem_carteira_verso')->storeAs('planos', $nome_imagem, 'public');
            $dataForm['imagem_carteira_verso'] = $path;
        }else{
            $dataForm['imagem_carteira_verso'] = $plano->imagem_carteira_verso;
        }

         $plano = Plano::whereId($id)->update($dataForm);
         return redirect('/plano')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id){
        $plano = Plano::findOrFail($id);
        //dd($faq);
        $plano->delete();
        return redirect('/plano')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, Plano $plano){
        $dataForm = $request->all();
        $itens = $plano->search($dataForm, $this->totalPage);
        if (!$itens) {
            return redirect('/plano')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.plano.index', compact('itens', 'dataForm'));
    }
}
