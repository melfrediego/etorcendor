<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

use App\Models\Mensalidade;
use App\Models\Pedido;
use App\Models\Socio;
use App\Models\Transacao;

class MensalidadeController extends Controller
{
    private $totalPage = 20;

    public function index(Request $request, Mensalidade $mensalidade){
        //$itens = Mensalidade::with(['transacao', 'pedido'])->orderby('id', 'asc')->whereNotNull ('charge_id' )->paginate($this->totalPage);
        $itens = Mensalidade::with(['transacao', 'pedido'])->orderby('id', 'DESC')->paginate($this->totalPage);
        return view('admin.mensalidade.index', compact('itens'));
    }

    public function show($id){
        $mensalidade = Mensalidade::with(['transacao'])->findOrFail($id);
        return view('admin.mensalidade.show', compact('mensalidade'));
    }

    // public function update(Request $request, $id){
    //     $mensalidade = Mensalidade::findOrFail($id);
    //
    //     $dataForm = [
    //         'status' => 'paid',
    //         'valor_pago' => $mensalidade->valor_cobrado,
    //     ];
    //
    //     $pedido = Pedido::where('id', $mensalidade->pedido_id)->get()->first();
    //
    //     $socio = Socio::where('id', $pedido->socio_id)->get()->first();
    //
    //      $mensalidade = Mensalidade::whereId($id)->update($dataForm);
    //      return redirect('/socio'.'/'.$socio->id.'/edit')->with('success', 'Dados atulizados com sucesso!');
    // }

    public function mensalidade_socio($id){
        $socio_mensalidades = Socio::with(['pedido', 'pedido.mensalidades.transacao'])->find($id);
        //dd($socio_mensalidades->pedido[0]->mensalidades[3]->transacao);
        $mensalidades_socio = Pedido::with(['mensalidades', 'socio'])->where('socio_id', $id)->get();
        return view('admin.mensalidade.mensalidade-socio', compact(['mensalidades_socio', 'socio_mensalidades']));
    }

    public function alterar_vencimento_mensalidade(Request $request){
        $mensalidade = Mensalidade::find(intval($request->mensalidade_id));
        //$mensalidade = Mensalidade::find(2010);
        //Verificar se existe transacao para essa mensalidades
        $transacao = Transacao::where('mensalidade_id', $mensalidade->id)->get();

        //return response()->json($mensalidade, 500);

        // if (empty($transacao)) {
        //     return response()->json('Sem trasacao gerencia net');
        // }


        // return response()->json( $transacao);
        // exit;

        if (empty($mensalidade)) {
            return response()->json('Nenhum mensalidade encontrada', 500);
        }

        if (empty($transacao)) {
            return response()->json('Existe transacao na gerencianet', 500);
        }



        $dataForm = [
            'data_vencimento' => $request->novo_vencimento
        ];
        $mensalidade = Mensalidade::whereId($mensalidade->id)->update($dataForm);
        return response()->json('Vencimento alterar com sucesso!', 200);
    }


    public function transacao_boleto($id, $socio_id){

        sleep(1);

        $pay_charge = null;
        $pay_charge_erro = [];

        $data_atual = date('Y-m-d');

        $mensalidade = Mensalidade::findOrFail($id);
        $socio = Socio::findOrFail($socio_id);
        $pedido = Pedido::with(['plano'])->where('id', $mensalidade->pedido_id)->first();
        $transacao = Transacao::where('mensalidade_id', $mensalidade->id)->count();

        // return response()->json($transacao, 500);
        //Verifica se existe transacao para essa mensalidade
        if($transacao != 0)
            return response()->json('Já existe um boleto gerado para mensalidade, certifique-se que o mesmo ainda esta na validade e envie para cliente!', 500);

        //Verifica se existe dado para essa mensalidade
        if(empty($mensalidade))
            return response()->json('Erro ao buscar Mensalidade contate o administrador', 500);

        //Verifica se existe dado para esse socio
        if(empty($socio))
            return response()->json('Erro ao buscar Sócio contate o administrador', 500);

        //Verifica se a mensalidade esta vencida
        if($mensalidade->data_vencimento < $data_atual)
            return response()->json('Mensalidade vencida. Favor alterar a data para gerar um novo boleto', 500);


        $clientId = config('gerencianet.client_id'); // insira seu Client_Id, conforme o ambiente (Des ou Prod)
        $clientSecret = config('gerencianet.client_secret'); // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        //$clientId = 'Client_Id_88e06150b36330dea7b3a19da76b6ea3528625d0';// insira seu Client_Id, conforme o ambiente (Des ou Prod)
        //$clientSecret = 'Client_Secret_a122b85d45bf67f57d7f4437328304a1669f239b'; // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        $options = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
        ];

        $item_1 = [
            'name' => $pedido->plano->titulo . " | P:" . $mensalidade->numero_mensalidade ."/". $pedido->qtd_parcela  , // nome do item, produto ou serviço, aqui vou informar a parcela tipo: P:1/12
            'amount' => 1, // quantidade
            'value' => $this->format_transaction_value($mensalidade->valor_cobrado) // valor (1000 = R$ 10,00) (Obs: É possível a criação de itens com valores negativos. Porém, o valor total da fatura deve ser superior ao valor mínimo para geração de transações.)
        ];
        $items = [
            $item_1
        ];
        $metadata = ['notification_url'=>config('gerencianet.notification_url')]; //Url de notificações
        $customer = [
            'name' => $socio->nome, // nome do cliente
            'cpf' => $socio->cpf, // cpf válido do cliente
            'phone_number' => $socio->telefone, // telefone do cliente
            'email' => $socio->email, // telefone do cliente
        ];

        $bankingBillet = [
            'expire_at' => $mensalidade->data_vencimento, // data de vencimento do titulo
            'message' => 'Boleto ref: mensalidade: ' . $mensalidade->numero_mensalidade ."/". $pedido->qtd_parcela, // mensagem a ser exibida no boleto
            'customer' => $customer,
        ];
        $payment = [
            'banking_billet' => $bankingBillet // forma de pagamento (banking_billet = boleto)
        ];
        $body = [
            'items' => $items,
            'metadata' =>$metadata,
            'payment' => $payment
        ];

        try {
            $api = new Gerencianet($options);
            $pay_charge = $api->oneStep([],$body);

            //Adiciona transacao boleto
            $transacao = Transacao::create([
                'charge_id' => $pay_charge['data']['charge_id'],
                'status' => $pay_charge['data']['status'],
                'payment_method' => $pay_charge['data']['payment'],
                'banking_billet_barcode' => $pay_charge['data']['barcode'],
                'banking_billet_link' => $pay_charge['data']['link'],
                'banking_billet_link_pdf' => $pay_charge['data']['pdf']['charge'],
                'banking_billet_expire_at' => $pay_charge['data']['expire_at'],
                'socio_id' => $socio->id,
                'mensalidade_id' => $mensalidade->id
            ]);

            //Atualizando mensalidade
            Mensalidade::whereId($mensalidade->id)->update([
                'charge_id' => $pay_charge['data']['charge_id'],
                'status' => $pay_charge['data']['status']
            ]);


            } catch (GerencianetException $e) {

                $pay_charge_erro['erro_code'] = $e->code;
                $pay_charge_erro['erro_error'] = $e->error;
                $pay_charge_erro['erro_error_description'] = $e->errorDescription;

                return response()->json($pay_charge_erro, 500);
            // print_r($e->code);
            // print_r($e->error);
            // print_r($e->errorDescription);

        } catch (Exception $e) {
            // print_r($e->getMessage());
            $pay_charge_erro['erro_get_mensage'] = $e->getMessage();
            return response()->json($pay_charge_erro, 500);
        }

        // return response()->json([
        //     "messagem" => "Boleto criado com sucesso",
        //     "pay_charge" => $pay_charge["data"]
        // ]);

        return response()->json("Boleto criado com sucesso. Veja no menu ao lado as opções de boleto!",200);
    }

    private function get_transacao_mensalidade($id_mensalidade){
        $transacao = Transacao::where('mensalidade_id', $id_mensalidade)->get();
    }

    public function cancel_transacao_gerencia_net(){
        $clientId = config('gerencianet.client_id'); // insira seu Client_Id, conforme o ambiente (Des ou Prod)
        $clientSecret = config('gerencianet.client_secret'); // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        $options = [
          'client_id' => $clientId,
          'client_secret' => $clientSecret,
          'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
        ];

        // $charge_id refere-se ao ID da transação ("charge_id")
        $params = [
          'id' => $charge_id
        ];

        try {
            $api = new Gerencianet($options);
            $charge = $api->cancelCharge($params, []);

            print_r($charge);
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function alterar_vencimento_gerencia_net(Request $request){

        $transacao = Transacao::find(intval($request->transacao_id));

        if (!$transacao) {
            return response()->json("Nenhum boleto encontrado para alterar vencimento!", 500);
        }

        $clientId = config('gerencianet.client_id'); // insira seu Client_Id, conforme o ambiente (Des ou Prod)
        $clientSecret = config('gerencianet.client_secret'); // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        $options = [
          'client_id' => $clientId,
          'client_secret' => $clientSecret,
          'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
        ];

        // $charge_id refere-se ao ID da transação gerada anteriormente
        $params = [
          'id' => $transacao->charge_id
        ];

        $body = [
          'expire_at' => $request->novo_vencimento
        ];

        try {
            $api = new Gerencianet($options);
            $charge = $api->updateBillet($params, $body);

            if ($charge['code'] == 200) {
                //Atualizando data vencimento mensalidade
                Mensalidade::whereId($transacao->mensalidade_id)->update([
                    'data_vencimento' => $request->novo_vencimento
                ]);

                //Atualizando data vencimento mensalidade
                Transacao::whereId($transacao->id)->update([
                    'banking_billet_expire_at' => $request->novo_vencimento
                ]);
            }

            //print_r($charge);
        } catch (GerencianetException $e) {
            //print_r($e->code);
            //print_r($e->error);
            //print_r($e->errorDescription);
            return response()->json($e->errorDescription, 500);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
            //print_r($e->getMessage());
        }

        return response()->json("Vencimento do boleto e mensalidade alterado com sucesso!", 200);
    }

    public function detalhe_transacao_gerencia_net($id_transacao){
        $clientId = config('gerencianet.client_id'); // insira seu Client_Id, conforme o ambiente (Des ou Prod)
        $clientSecret = config('gerencianet.client_secret'); // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        $options = [
          'client_id' => $clientId,
          'client_secret' => $clientSecret,
          'sandbox' => config('gerencianet.is_sandbox') // altere conforme o ambiente (true = desenvolvimento e false = producao)
        ];

        //Busca transacao
        $transacao = Transacao::find($id_transacao);
        if ($transacao == null) {
            return response()->json('Não foi encontrado nenhuma transação com os dados informados', 500);
        }

        $params = [
          'id' => $transacao->charge_id // $charge_id refere-se ao ID da transação ("charge_id")
        ];

        try {
            $api = new Gerencianet($options);
            $charge = $api->detailCharge($params, []);
            return response()->json($charge, 200);
            //print_r($charge);
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
            // print_r($e->getMessage());
        }
    }

    public function reenviar_boleto_gerencia_net($id_transacao, $id_socio){

        $clientId = config('gerencianet.client_id'); // insira seu Client_Id, conforme o ambiente (Des ou Prod)
        $clientSecret = config('gerencianet.client_secret'); // insira seu Client_Secret, conforme o ambiente (Des ou Prod)

        $options = [
          'client_id' => $clientId,
          'client_secret' => $clientSecret,
          'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
        ];

        //Busca transacao
        $transacao = Transacao::find($id_transacao);
        if ($transacao == null) {
            return response()->json('Não foi encontrado nenhuma transação com os dados informados', 500);
        }

        //Busca Socio
        $socio = Socio::find($id_socio);
        if ($socio == null) {
            return response()->json('Não foi encontrado nenhuma sócio com os dados informados', 500);
        }

        // $charge_id refere-se ao ID da transação ("charge_id")
        $params = [
          'id' => $transacao->charge_id
        ];

        $body = [
          'email' => $socio->email
        ];

        try {
            $api = new Gerencianet($options);
            $response = $api->resendBillet($params, $body);

            //print_r($response);
        } catch (GerencianetException $e) {
            // print_r($e->code);
            // print_r($e->error);
            // print_r($e->errorDescription);
            return response()->json($e->errorDescription, 500);
        } catch (Exception $e) {
            //print_r($e->getMessage());
            return response()->json($e->errorDescription, 500);
        }

        return response()->json('Boleto enviado com sucesso!', 200);

    }

    public function format_transaction_value($value){
        return intval(
            strval(floatval(
                preg_replace("/[^0-9.]/", "", $value)
            ) * 100)
        );
    }

}
