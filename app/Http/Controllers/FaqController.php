<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller
{
    private $totalPage = 20;

    public function index(){
        $itens = Faq::paginate($this->totalPage);
        return view('admin.faq.index', compact('itens'));
    }

    public function create(){
        return view('admin.faq.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'pergunta' => 'required',
            'resposta' => 'required',
            'visivel_home' => 'required',
            'ativo' => 'required',
        ]);

        $dataForm = [
            'pergunta' => $request->pergunta,
            'resposta' => $request->resposta,
            'visivel_home' => $request->visivel_home,
            'ativo' => $request->ativo
        ];

        $faq = Faq::create($dataForm);
        return redirect('/faq')->with('success', 'Dados inseridos com sucesso!');
    }

    public function show($id){
        $faq = Faq::findOrFail($id);
        return view('admin.faq.show', compact('faq'));
    }

    public function edit($id){
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
             'pergunta' => 'required',
             'resposta' => 'required',
             'visivel_home' => 'required',
             'ativo' => 'required'
         ]);

         $dataForm = [
             'pergunta' => $request->pergunta,
             'resposta' => $request->resposta,
             'visivel_home' => $request->visivel_home,
             'ativo' => $request->ativo
         ];

         $faq = Faq::whereId($id)->update($dataForm);

         //$faq = Faq::update($data);
         return redirect('/faq')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id){
        $faq = Faq::findOrFail($id);
        //dd($faq);
        $faq->delete();
        return redirect('/faq')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, Faq $faq){
        $dataForm = $request->all();
        $itens = $faq->search($dataForm, $this->totalPage);

        //dd($faqs);
        if (!$itens) {
            return redirect('/faq')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.faq.index', compact('itens', 'dataForm'));
    }
}
