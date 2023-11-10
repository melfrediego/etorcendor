<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Socio;
use App\Models\Plano;
use App\Models\Pedido;
use App\Models\Ticket;
use App\Models\ParceiroPatrocinador;
use App\Models\Mensalidade;
use App\Models\Transacao;
use App\Models\SolicitacaoRetiradaFinanceira as SolicitacaoRetirada;
use App\User;

class AdminController extends Controller
{
    public function index(){




        $sabado = 6; //sabado = 6º dia = fim da semana.
        $dia_atual=date('w'); //pego o dia atual
        $dias_que_faltam_para_o_sabado = $sabado - $dia_atual;

        $data_inicio_semana = strtotime("-$dia_atual days");
        $data_fim_semana = strtotime("+$dias_que_faltam_para_o_sabado days");


        // echo date('m-d-Y',$inicio); //data inicial
        // echo '<br/ >';
        // echo date('m-d-Y',$fim); //data final

        //exit;

        $hoje = date('Y-m-d');
        $mes_atual = date('m');
        $ano_atual = date('Y');


        $data_incio_mes = mktime(0, 0, 0, date('m') , 1 , date('Y'));

        // dd(date('Y-m-d', $data_incio_mes));
        $socios = Socio::where('id', '>', 9);
        $socios_cadastrados =$socios->count();
        $planos_cadastrados = Plano::count();
        $tickets_cadastrados = Ticket::count();
        $parceiros_cadastrados = ParceiroPatrocinador::count();

        $cadastro_socio_dia = Socio::orderby('id', 'desc')->paginate(8);
        //$cadastro_socio_semana = Socio::all();
        //$cadastro_socio_mes = Socio::all();

        //Mensalidades pagas (SUM)
        $mensalidades_pagas = Mensalidade::where('status', '=', 'paid')->sum('valor_cobrado');
        $saldo_conta = ($mensalidades_pagas-8972.43);
        //dd($saldo_conta);

        //Ultimas Mensalidades pagas
        $ultimas_transacoes_pagas = Mensalidade::with(['transacao','pedido', 'pedido.socio'])->orderby('updated_at', 'DESC')->limit(5)->get();

        //Recebidos Hoje
        $mensalidades_recebidas_hoje = Mensalidade::where('status', '=', 'paid')->Where('updated_at', '>=', $hoje)->sum('valor_cobrado');

        //Recebidos Semana
        $mensalidades_recebidas_semana = Mensalidade::where('status', '=', 'paid')
                                                    ->whereBetween('updated_at', [date('Y-m-d', $data_inicio_semana), $hoje])
                                                    ->sum('valor_cobrado');

        //Recebidos Mes
        $mensalidades_recebidas_mes = Mensalidade::where('status', '=', 'paid')
                                                    ->whereBetween('updated_at', [date('Y-m-d', $data_incio_mes), $hoje])
                                                    ->sum('valor_cobrado');


        //Retiradas e transferencias
        $total_retiradas = SolicitacaoRetirada::where('deferido', '=', 'S')->sum('valor_solicitado');

        //Retiradas e transferencias
        $ultima_retirada = SolicitacaoRetirada::where('deferido', '=', 'S')->orderby('created_at', 'DESC')->first();

        // dd($ultima_retirada->valor_solicitado);

        $saldo_conta = $saldo_conta - $ultima_retirada->valor_solicitado;


        //dd($transacoes_pagas);

        return view('admin.home', compact(
            'socios_cadastrados',
            'planos_cadastrados',
            'tickets_cadastrados',
            'parceiros_cadastrados',
            'cadastro_socio_dia',
            'saldo_conta',
            'ultimas_transacoes_pagas',
            'mensalidades_recebidas_hoje',
            'mensalidades_recebidas_semana',
            'mensalidades_recebidas_mes',
            'total_retiradas',
            'ultima_retirada'
        ));
    }

    // public function socioTorcedor(){
    //
    // }
}
