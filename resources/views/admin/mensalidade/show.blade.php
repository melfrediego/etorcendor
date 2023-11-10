@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Mensalidade: # {{ $mensalidade->id }}
                        <small>
                            visualizando dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/mensalidade" class="btn btn-primary m-btn m-btn--icon">
                            <span>
                                <i class="fa fa-navicon"></i>
                                <span>
                                    Listar Dados
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="actions">

                <!-- <app-simples-button #refresh></app-simples-button>
                <app-simples-button #fullScreen></app-simples-button> -->
            </div>
        </div>

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('mensalidade.update',$mensalidade->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="col-12">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif
                </div>

                {{-- <div class="m-form__heading">
					<h2 class="m-form__heading-title">
						Mensalidade:
						<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Cod. Mensalidade"></i>
					</h2>
				</div> --}}

                <div class="m-form__heading">
					<h3 class="m-form__heading-title">
						Sócio Torcedor
						<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Dados do sócio"></i>
					</h3>
				</div>

                {{-- <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Ativo:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidade->pedido->socio->ativo }}
						</span>
					</div>
				</div> --}}

                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Matricula:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidade->pedido->socio->matricula }}
						</span>
					</div>
				</div>

                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Nome:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidade->pedido->socio->nome }}
						</span>
					</div>
				</div>



                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						CPF:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidade->pedido->socio->cpf }}
						</span>
					</div>
				</div>

                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Email:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidade->pedido->socio->email }}
						</span>
					</div>
				</div>

                <br>

                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_1">
                                <i class="fa fa-list"></i>
                                Mensalidade(s)
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numero</th>
                                    {{-- <th>Pedido</th> --}}
                                    <th>Data de Emissao:</th>
                                    <th>Data de Vencimento:</th>
                                    <th>Data de Pagamento:</th>
                                    <th>Status:</th>
                                    <th>Valor:</th>
                                    <th>Valor Pago:</th>
                                    <th>Criado em:</th>
                                    {{-- <th>Modificado em:</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $mensalidade->id }}</td>
                                        <td>{{ $mensalidade->numero_mensalidade }} / 12</td>
                                        {{-- <td>{{ $mensalidade->pedido_id }}</td> --}}
                                        <td>{{ date('d/m/Y', strtotime($mensalidade->data_emissao)) }}</td>
                                        <td>
                                            {{ date('d/m/Y', strtotime($mensalidade->data_vencimento)) }}
                                            {{-- <button type="button" class="btn btn-sm active btn-default" name="button"><i class="fa fa-calendar"></i></button> --}}
                                        </td>

                                        <td>
                                            @if (empty($mensalidade->data_pagamento))
                                                --
                                            @else
                                                {{ date('d/m/Y', strtotime($mensalidade->data_pagamento)) }}
                                            @endif
                                        </td>

                                        <td width="160">
                                            {{-- {{ $mensalidade->status }} --}}
                                            @if ($mensalidade->status == 'paid')
                                                <span class="m-badge m-badge--success m-badge--wide"><i class="fa fa-check"></i> Pago</span>
                                            @elseif ($mensalidade->status == 'waiting')
                                                <span class="m-badge m-badge--info m-badge--wide"><i class="fa fa-clock-o" aria-hidden="true"></i> Aguardando</span>
                                            @else
                                                <span class="m-badge m-badge--metal active m-badge--wide"><i class="fa fa-warning"></i> Pendente</span>
                                            @endif
                                        </td>
                                        <td>R$ {{ $mensalidade->valor_cobrado }}</td>
                                        <td>
                                            @if (empty($mensalidade->valor_pago))
                                                R$ 0,00
                                            @else
                                                R$ {{ $mensalidade->valor_pago }}
                                            @endif
                                        </td>
                                        <td width="140">{{ date('d/m/Y', strtotime($mensalidade->created_at))}}</td>
                                        {{-- <td width="140">{{ date('d/m/Y', strtotime($mensalidade->updated_at))}}</td> --}}
                                    </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <br>

                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_1">
                                <i class="fa fa-money"></i>
                                Transações e Boletos Lançados
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                            {{-- {{$mensalidade->transacao }} --}}
                            @forelse($mensalidade->transacao as $transacao)

                                @if ($transacao->payment_method == 'banking_billet'  || $transacao->payment_method == '')

                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cod.Transacao</th>
                                            <th>Metodo</th>
                                            <th>Data de Emissão</th>
                                            <th>Data de Vencimento</th>
                                            <th>Status</th>
                                            <th>Valor</th>
                                            <th>Valor Pago:</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $transacao->id }}</td>
                                                <td>{{ $transacao->charge_id }}</td>
                                                <td>
                                                    @if ($transacao->payment_method == 'banking_billet'  || $transacao->payment_method == '')
                                                        Boleto
                                                    @else
                                                        Cartão de Credito
                                                    @endif
                                                </td>
                                                <td>{{ date('d/m/Y', strtotime($transacao->created_at)) }}</td>
                                                <td>
                                                    {{ date('d/m/Y', strtotime($transacao->banking_billet_expire_at)) }}
                                                    {{-- <button type="button" class="btn btn-sm active btn-default" name="button"><i class="fa fa-calendar"></i></button> --}}
                                                </td>

                                                {{-- <td>
                                                    @if (empty($mensalidade->data_pagamento))
                                                        --
                                                    @else
                                                        {{ date('d/m/Y', strtotime($mensalidade->data_pagamento)) }}
                                                    @endif
                                                </td> --}}


                                                <td width="140">
                                                    @if ($transacao->status == 'paid')
                                                        <span class="m-badge m-badge--success m-badge--wide"><i class="fa fa-check"></i> Pago</span>
                                                    @elseif ($transacao->status == 'waiting')
                                                        <span class="m-badge m-badge--info m-badge--wide"><i class="fa fa-clock-o" aria-hidden="true"></i> Aguardando</span>
                                                    @else
                                                        <span class="m-badge m-badge--primary m-badge--wide"><i class="fa fa-warning"></i> Pendente</span>
                                                    @endif
                                                </td>
                                                <td>R$ {{ $mensalidade->valor_cobrado }}</td>
                                                <td>
                                                    @if (empty($mensalidade->valor_pago))
                                                        R$ 0,00
                                                    @else
                                                        R$ {{ $mensalidade->valor_pago }}
                                                    @endif
                                                </td>

                                                <td width="60">
                                                    {{-- <input type="hidden" name="" id="copy_boleto" value="{{ $transacao->banking_billet_link_pdf }}"> --}}
                                                    {{-- <button type="button" data-code="{{ $transacao->banking_billet_barcode }}" class="btn btn-primary btn-sm btn-copiar-codigo">Copiar Codigo</button> --}}
                                                    {{-- <a href="#" class="btn btn-secondary btn-sm" data-clipboard="true" data-clipboard-target="#copy_boleto">
        												<i class="la la-clipboard"></i>
        												Copiar código
        											</a> --}}
                                                    {{-- <button type="button" data-code="{{ $transacao->banking_billet_barcode }}" class="btn btn-primary btn-sm btn-copiar-codigo">Copiar Codigo</button> --}}
                                                    {{-- <button type="button" data-id="{{ $mensalidade->pedido->socio->id }}" data-code="{{ $transacao->id }}" class="btn btn-success btn-sm btn-enviar-boleto-email" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Enviar por email"><i class="fa fa-envelope-o" aria-hidden="true"></i></button> --}}
                                                    {{-- <a href="{{ $transacao->banking_billet_link }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver Boleto HTML"><i class="fa fa-external-link" aria-hidden="true"></i></a> --}}
                                                    <a href="{{ $transacao->banking_billet_link_pdf }}" target="_blank" class="btn btn-primary btn-sm" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver Boleto PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                                    {{-- <a href="" class="btn btn-sm btn-danger" data-skin="dark" data-toggle-t="m-tooltip" data-placement="top" title="" data-original-title="Deletar dados" data-toggle="modal" data-target="#m_modal_1" onclick="deleteData({{$item->id}})"><i class="fa fa-trash"></i></a> --}}
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>

                                @else
                                    <h4>Sua transação foi realizado com cartção de credito</h4>
                                @endif

                            @empty
                                <h5 class="text-center">Nenhum dado a ser mostrado!</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">

                            {{-- <button type="button" class="btn btn-info m-btn m-btn--icon btn-alterar-vencimento">
                                <i class="fa fa-calendar-check-o"></i>&nbsp;Alterar Vencimento
                            </button> --}}

                            {{-- <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                <i class="fa fa-calendar-check-o"></i>&nbsp;Informar Pagamento
                            </button> --}}

                            <span class="m--margin-left-10">
                                {{-- ou --}}
                                <a href="#" onclick="window.history.go(-1); return false;" class="m-link m--font-bold text-danger">
                                    voltar
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@include('includes.modals')

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
{{-- <script type="text/javascript" src="{{ asset('js/alerts-modal.js') }}"></script> --}}
<script type="text/javascript">
    $(document).ready(function(){

        // Enviar email com boleto
        $(".btn-enviar-boleto-email").on("click", function(){
            //alert('Enviar email boleto');
            var id_socio = $(this).data('id');
            var id_transacao = $(this).data('code');
            load_on();
            // $.ajax({
            //     url:"/socio/ativar/"+id_socio,
            //     dataType: "json",
            //     success: function(resp){
            //       alert(resp);
            //       load_off();
            //       modal_sucesso_on();
            //       $(".texto-sucesso").html("");
            //       $(".texto-sucesso").html(resp);
            //     }
            // })
        });

        // Aletrar Vencimento
        $(".btn-alterar-vencimento").on("click", function(){
            modal_vencimento_on();
        });

        // Salvar Novo Vencimento
        $('.btn-salvar-vencimento').on("click", function() {
            var nova_data = $('#txt-vencimento').val();
            alert('Nova data ' + nova_data);
            if (nova_data != "") {
                modal_vencimento_off();
                load_on();
                // $.ajax({
                //     url:"/socio/gera_senha/"+id_socio,
                //     dataType: "json",
                //     success: function(resp){
                //         // console.log(resp);
                //       // alert(resp);
                //       load_off();
                //       modal_sucesso_on();
                //       $(".texto-sucesso").html("");
                //       $(".texto-sucesso").html(resp);
                //     }
                // })
            }else{
                alert('Informe uma data valida!');
            }
        });

        $('.modal-close').on('click', function(){
            modal_sucesso_off();
            window.location.href="/socio";
        });
    });

    function load_on(){
        $(".modal-load").modal({
             keyboard: true
        },"show");
        return false;
    }

    function load_off(){
        $(".modal-load").modal("hide");
        return false;
    }

    function modal_sucesso_on(){
        $(".modal-sucesso").modal({
             keyboard: true
        },"show");
        return false;
    }

    function modal_sucesso_off(){
        $(".modal-sucesso").modal("hide");
        return false;
    }

    function modal_vencimento_on(){
        $(".modal-novo-vencimento").modal("show");
    }

    function modal_vencimento_off(){
        $(".modal-novo-vencimento").modal("hide");
    }
</script>
@endsection
