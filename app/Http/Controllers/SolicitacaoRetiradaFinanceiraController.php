<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SolicitacaoRetiradaFinanceira;
use App\Models\Banco;

class SolicitacaoRetiradaFinanceiraController extends Controller
{
    private $totalPage = 20;

    public function index(){
        $itens = SolicitacaoRetiradaFinanceira::with(['banco'])->paginate($this->totalPage);

        return view('admin.solicitacao-retirada-financeira.index', compact('itens'));
    }

    public function create(){
        $bancos = Banco::all();

        return view('admin.solicitacao-retirada-financeira.create', compact('bancos'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'tipo_pessoa' => 'required',
            'nome' => 'required',
            'cpf_cnpj' => 'required',
            'tipo_conta' => 'required',
            'agencia_numero' => 'required',
            'agencia_digito' => 'required',
            'conta_numero' => 'required',
            'conta_digito' => 'required',
            'banco_id' => 'required',
            'valor_solicitado' => 'required',
        ]);

        $dataForm = [
            'tipo_pessoa' => $request->tipo_pessoa,
            'nome' => $request->nome,
            'cpf_cnpj' => $request->cpf_cnpj,
            'tipo_conta' => $request->tipo_conta,
            'agencia_numero' => $request->agencia_numero,
            'agencia_digito' => $request->agencia_digito,
            'conta_numero' => $request->conta_numero,
            'conta_digito' => $request->conta_digito,
            'banco_id' => $request->banco_id,
            'deferido' => $request->deferido,
            'observacao_deferido' => $request->observacao_deferido,
            'valor_solicitado' => $request->valor_solicitado,
        ];

        $solicitacao = SolicitacaoRetiradaFinanceira::create($dataForm);
        return redirect('/solicitacao-retirada-financeira')->with('success', 'Sua solicitacao foi enviada com sucesso, breve iremos analisar e retornamos!');
    }

    public function show($id){
        $solicitacao = SolicitacaoRetiradaFinanceira::findOrFail($id);
        return view('admin.solicitacao-retirada-financeira.show', compact('faq'));
    }

    public function edit($id){
        $solicitacao = SolicitacaoRetiradaFinanceira::findOrFail($id);
        return view('admin.solicitacao-retirada-financeira.edit', compact('solicitacao'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'tipo_pessoa' => 'required',
            'nome' => 'required',
            'cpf_cnpj' => 'required',
            'tipo_conta' => 'required',
            'agencia_numero' => 'required',
            'agencia_digito' => 'required',
            'conta_numero' => 'required',
            'conta_digito' => 'required',
            'banco_id' => 'required',
            'valor_solicitado' => 'required',
        ]);

        $dataForm = [
            'tipo_pessoa' => $request->tipo_pessoa,
            'nome' => $request->nome,
            'cpf_cnpj' => $request->cpf_cnpj,
            'tipo_conta' => $request->tipo_conta,
            'agencia_numero' => $request->agencia_numero,
            'agencia_digito' => $request->agencia_digito,
            'conta_numero' => $request->conta_numero,
            'conta_digito' => $request->conta_digito,
            'banco_id' => $request->banco_id,
            'deferido' => $request->deferido,
            'observacao_deferido' => $request->observacao_deferido,
            'valor_solicitado' => $request->valor_solicitado,
        ];

         $solicitacao = SolicitacaoRetiradaFinanceira::whereId($id)->update($dataForm);

         //$faq = SolicitacaoRetiradaFinanceira::update($data);
         return redirect('/solicitacao-retirada-financeira')->with('success', 'Dados atulizados com sucesso!');
    }

    public function destroy(Request $request, $id){
        $solicitacao = SolicitacaoRetiradaFinanceira::findOrFail($id);
        //dd($faq);
        $solicitacao->delete();
        return redirect('/solicitacao-retirada-financeira')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, SolicitacaoRetiradaFinanceira $solicacao){
        $dataForm = $request->all();
        $itens = $solicitacao->search($dataForm, $this->totalPage);

        //dd($faqs);
        if (!$itens) {
            return redirect('/solicitacao-retirada-financeira')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.solicitacao-retirada-financeira.index', compact('itens', 'dataForm'));
    }
}
