<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banco;

class BancoController extends Controller
{
    private $totalPage = 20;

    public function index(){
        $itens = Banco::paginate($this->totalPage);
        return view('admin.banco.index', compact('itens'));
    }

    public function create(){
        return view('admin.banco.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'numero' => 'required',
            'nome' => 'required',
            'ativo' => 'required',
        ]);

        $dataForm = [
            'numero' => $request->numero,
            'nome' => $request->nome,
            'ativo' => $request->ativo
        ];

        $banco = Banco::create($dataForm);
        return redirect('/banco')->with('success', 'Dados inseridos com sucesso!');
    }

    public function show($id){
        $banco = Banco::findOrFail($id);
        return view('admin.banco.show', compact('banco'));
    }

    public function edit($id){
        $banco = Banco::findOrFail($id);
        return view('admin.faq.edit', compact('banco'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
             'numero' => 'required',
             'nome' => 'required',
             'ativo' => 'required'
         ]);

         $dataForm = [
             'numero' => $request->numero,
             'nome' => $request->nome,
             'ativo' => $request->ativo
         ];

         $banco = Banco::whereId($id)->update($dataForm);

         //$banco = Banco::update($data);
         return redirect('/banco')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id){
        $banco = Banco::findOrFail($id);
        //dd($banco);
        $banco->delete();
        return redirect('/banco')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, Banco $banco){
        $dataForm = $request->all();
        $itens = $banco->search($dataForm, $this->totalPage);

        //dd($bancos);
        if (!$itens) {
            return redirect('/banco')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.banco.index', compact('itens', 'dataForm'));
    }
}
