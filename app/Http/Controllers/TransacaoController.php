<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transacao;
use App\Models\Mensalidade;
use App\Models\Socio;

class TransacaoController extends Controller
{

    private $totalPage = 20;

    public function index(Request $request, Transacao $transacao){
        $itens = Transacao::orderby('id', 'desc')->paginate($this->totalPage);
        //dd($itens);
        return view('admin.transacao.index', compact('itens'));
    }

    public function show($id){
        $mensalidade = Mensalidade::findOrFail($id);
        return view('admin.mensalidade.show', compact('mensalidade'));
    }

    public function update(Request $request, $id){
        $mensalidade = Mensalidade::findOrFail($id);

        $dataForm = [
            'status' => 'paid',
            'valor_pago' => $mensalidade->valor_cobrado,
            // 'data_pagamento' => $request->email,
            // 'site' => $request->site,
            // 'patrocinador' => $request->patrocinador,
            // 'parceiro' => $request->parceiro,
            // 'responsavel_nome' => $request->responsavel_nome,
            // 'responsavel_email' => $request->responsavel_email,
            // 'responsavel_telefone' => $request->responsavel_telefone
        ];

        $pedido = Pedido::where('id', $mensalidade->pedido_id)->get()->first();

        $socio = Socio::where('id', $pedido->socio_id)->get()->first();

        // dd($socio);


         $mensalidade = Mensalidade::whereId($id)->update($dataForm);
         return redirect('/socio'.'/'.$socio->id.'/edit')->with('success', 'Dados atulizados com sucesso!');
    }

}
