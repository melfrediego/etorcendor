@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Mensalidades/Socio
                        <small>
                            visualizando dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/socio" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                {{-- <div class="col-12">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                      <br />
                    @endif
                </div> --}}

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


                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Matricula:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidades_socio[0]->socio->matricula }}
						</span>
					</div>
				</div>

                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Nome:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidades_socio[0]->socio->nome }}
						</span>
					</div>
				</div>



                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						CPF:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidades_socio[0]->socio->cpf }}
						</span>
					</div>
				</div>

                <div class="form-group m-form__group m-form__group--sm row">
					<label class="col-1 col-form-label">
						Email:
					</label>
					<div class="col-xl-8 col-lg-8">
						<span class="m-form__control-static">
							{{ $mensalidades_socio[0]->socio->email }}
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
                                    <th>Valor:</th>
                                    <th>Valor Pago (R$)::</th>
                                    <th>Status:</th>
                                    <th>Criado em:</th>
                                    <th></th>
                                    {{-- <th>Modificado em:</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                    {{-- @forelse ($mensalidades_socio[0]->mensalidades as $key => $mensalidade) --}}
                                    @forelse ($socio_mensalidades->pedido[0]->mensalidades as $key => $mensalidade)

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


                                            <td>R$ {{ $mensalidade->valor_cobrado }}</td>
                                            <td>
                                                @if (empty($mensalidade->valor_pago))
                                                    R$ 0,00
                                                @else
                                                    R$ {{ $mensalidade->valor_pago }}
                                                @endif
                                            </td>

                                            <td width="150">
                                                {{-- {{ $mensalidade->status }} --}}
                                                @if ($mensalidade->status == 'paid')
                                                    <span class="m-badge m-badge--success m-badge--wide"><i class="fa fa-check"></i> Pago</span>
                                                @elseif ($mensalidade->status == 'waiting')
                                                    <span class="m-badge m-badge--info m-badge--wide"><i class="fa fa-clock-o" aria-hidden="true"></i> Aguardando</span>
                                                @else
                                                    <span class="m-badge m-badge--metal active m-badge--wide"><i class="fa fa-warning"></i> Pendente</span>
                                                @endif
                                            </td>
                                            <td width="140">{{ date('d/m/Y', strtotime($mensalidade->created_at))}}</td>
                                            <td width="180">
                                                <a href="{{ route('mensalidade.show',$mensalidade->id) }}" class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                                {{-- <button type="button" data-code="{{ $transacao->banking_billet_barcode }}" class="btn btn-primary btn-sm btn-copiar-codigo">Copiar Codigo</button> --}}
                                                {{-- <button type="button" data-code="{{ $mensalidade->id }}" class="btn btn-primary btn-sm btn-copiar-codigo">Copiar Codigo</button> --}}
                                                @if ($mensalidade->status != 'paid')
                                                    <div class="btn-group">
														<button type="button" data-id="{{ $mensalidade->id }}" data-socio="{{ $mensalidades_socio[0]->socio->id }}" class="btn btn-sm btn-warning btn-gerar-boleto" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Gerar Boleto">
															<i class="fa fa-barcode" aria-hidden="true"></i>
														</button>

														<button type="button" class="btn btn-sm btn-warning active dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Detalhes Boleto">
															<span class="sr-only">
																Toggle Dropdown
															</span>
														</button>

														<div class="dropdown-menu dropdown-menu-right"x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(194px, -188px, 0px);">
                                                            @forelse ($mensalidade->transacao as $key => $transacao)
																<a class="dropdown-item btn-reenvio-boleto" href="#" data-transacao="{{ $transacao->id }}" data-socio="{{ $mensalidades_socio[0]->socio->id }}">
																	<i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Boleto Email
																</a>
																<a class="dropdown-item btn-alterar-vencimento-boleto" href="#" data-transacao="{{ $transacao->id }}" data-socio="{{ $mensalidades_socio[0]->socio->id }}">
																	<i class="fa fa-calendar" aria-hidden="true"></i> Alterar Vencimento Boleto
																</a>
                                                                <div class="dropdown-divider"></div>
    															<a class="dropdown-item" href="{{ $transacao->banking_billet_link_pdf }}" target="_blank">
    																<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF Boleto
    															</a>
                                                            @empty
                                                                <a class="dropdown-item" href="#">
																	Crie um boleto para visualizar aqui
																</a>
                                                            @endforelse
														</div>
													</div>

                                                    {{-- <button type="button" data-id="{{ $mensalidade->id }}" data-socio="{{ $mensalidades_socio[0]->socio->id }}" class="btn btn-warning btn-sm btn-gerar-boleto" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Gerar Boleto"><i class="fa fa-barcode" aria-hidden="true"></i></button> --}}
                                                    @if (count($mensalidade->transacao) > 0)
                                                        <button type="button" class="btn btn-info btn-sm btn-gerar-boleto" data-skin="dark" disabled="disabled"><i class="fa fa-calendar-check-o"></i></button>
                                                    @else
                                                        <button type="button" data-id="{{ $mensalidade->id }}" data-socio="{{ $mensalidades_socio[0]->socio->id }}" class="btn btn-info active btn-sm btn-alterar-vencimento" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Alterar Vencimento Mensalidade"><i class="fa fa-calendar-check-o"></i></button>
                                                    @endif

                                                @else
                                                    <button type="button" class="btn btn-default btn-sm btn-gerar-boleto" data-skin="dark" disabled="disabled"><i class="fa fa-barcode" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm btn-alterar-vencimento" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="" disabled="disabled"><i class="fa fa-calendar-check-o"></i></button>

                                                @endif
                                                {{-- <a href="{{ $transacao->banking_billet_link }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver Boleto HTML"><i class="fa fa-external-link" aria-hidden="true"></i></a> --}}
                                                {{-- <a href="{{ $mensalidade->id }}" target="_blank" class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver Boleto PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> --}}
                                                {{-- <a href="" class="btn btn-sm btn-danger" data-skin="dark" data-toggle-t="m-tooltip" data-placement="top" title="" data-original-title="Deletar dados" data-toggle="modal" data-target="#m_modal_1" onclick="deleteData({{$item->id}})"><i class="fa fa-trash"></i></a> --}}
                                            </td>
                                            {{-- <td width="140">{{ date('d/m/Y', strtotime($mensalidade->updated_at))}}</td> --}}
                                        </tr>
                                    @empty
                                        <h4>Nenhum dado a ser mostrado!</h4>
                                    @endforelse

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <br>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">

                            {{-- <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                <i class="fa fa-calendar-check-o"></i>&nbsp;Informar Pagamento
                            </button> --}}

                            <span class="m--margin-left-10">
                                {{-- ou --}}
                                {{-- <a href="/mensalidade" class="m-link m--font-bold text-danger">
                                    voltar
                                </a> --}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@include('includes.modals');

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
{{-- <script type="text/javascript" src="{{ asset('js/alerts-modal.js') }}"></script> --}}
<script type="text/javascript">
    $(document).ready(function(){

        // $('#txt-vencimento').mask('99/99/9999',{placeholder:"dd/mm/yyyy"});

        //Gerar Boleto GerenciaNet
        $(".btn-gerar-boleto").on("click", function(e){
            e.preventDefault();
            load_on();
            var mensalidade_id = $(this).data('id');
            var socio_id = $(this).data('socio');
            $.ajax({
                url:"/mensalidade/gerar-boleto/"+mensalidade_id+"/"+socio_id,
                dataType: "json",
                success: function(resp){
                    load_off();
                  $(".texto-sucesso").html("");
                  $(".texto-sucesso").html(resp);
                  modal_sucesso_on();
                },
                error: function(resp){
                    // $('#loading').modal('hide');
                    load_off();
                    $(".texto-erro").html("");
                    $(".texto-erro").html(resp.responseJSON);
                    modal_erro_on();
                }
            })
        });

        // Reenvio Boleto Email GerenciaNet
        $(".btn-reenvio-boleto").on("click", function(e){
            e.preventDefault();
            load_on();
            var transacao_id = $(this).data('transacao');
            var socio_id = $(this).data('socio');
            $.ajax({
                url:"/mensalidade/reenviar-boleto/"+transacao_id+"/"+socio_id,
                dataType: "json",
                success: function(resp){
                    load_off();
                    // console.log(resp);
                      $(".texto-sucesso").html("");
                      $(".texto-sucesso").html(resp);
                      modal_sucesso_on();
                },
                error: function(resp){
                    console.log(resp);
                    //alert('Desativar load');
                    // $('#loading').modal('hide');
                    // load_off();
                    // $(".texto-erro").html("");
                    // $(".texto-erro").html(resp);
                    // modal_erro_on();
                }
            })
        });

        // Detalhe Transação GerenciaNet
        $(".btn-detalhe-transacao").on("click", function(e){
            e.preventDefault();
            load_on();
            var transacao_id = $(this).data('transacao');
            $.ajax({
                url:"/mensalidade/detalhe-transacao/"+transacao_id,
                dataType: "json",
                success: function(resp){
                    load_off();
                        console.log(resp);
                      $(".texto-sucesso").html("");
                      $(".texto-sucesso").html(resp);
                      modal_sucesso_on();
                },
                error: function(resp){
                    console.log(resp);
                    //alert('Desativar load');
                    // $('#loading').modal('hide');
                    // load_off();
                    // $(".texto-erro").html("");
                    // $(".texto-erro").html(resp);
                    // modal_erro_on();
                }
            })
        });


        // Aletrar Vencimento Mensalidade
        $(".btn-alterar-vencimento").on("click", function(){
            $("#mensalidade_id").val($(this).data('id'));
            $("#socio_id").val($(this).data('socio'));
            modal_vencimento_on();
        });

        // Aletrar Vencimento Boleto
        $(".btn-alterar-vencimento-boleto").on("click", function(){
            $("#boleto_transacao_id").val($(this).data('transacao'));
            $("#boleto_socio_id").val($(this).data('socio'));

            var transacao_id = $(this).data('transacao')
            //alert('Trasacao ' + transacao_id );
            modal_vencimento_boleto_on();
        });


        // Salvar Novo Vencimento
        $('.btn-salvar-vencimento').on("click", function(e) {
            e.preventDefault();
            var nova_data = $('#txt-vencimento').val();
            var mensalidade_id = $('#mensalidade_id').val();
            var socio_id = $('#socio_id').val();
            // alert('Nova data ' + nova_data);
            if (nova_data != "") {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
                modal_vencimento_off();
                load_on();
                $.ajax({
                    type: 'post',
                    data: { novo_vencimento: nova_data, mensalidade_id: mensalidade_id, socio_id: socio_id },
                    url:"{{ route('mensalidade.alterar_vencimento') }}",
                    dataType: "json",
                    success: function(resp){
                      load_off();
                      $(".texto-sucesso").html("");
                      $(".texto-sucesso").html(resp);
                      modal_sucesso_on();
                  },
                  error: function(resp){
                      load_off();
                      $(".texto-erro").html("");
                      $(".texto-erro").html(resp.responseJSON);
                      modal_erro_on();
                      //console.log(resp);
                  },
                })
            }else{
                modal_vencimento_off();
                modal_erro_on();
                $(".texto-erro").html("");
                $(".texto-erro").html('Informe uma data valida!');
            }
        });

        // Salvar Novo Vencimento Boleto GN
        $('.btn-salvar-vencimento-boleto').on("click", function(e) {
            e.preventDefault();

            //alert('Cheguei aqui');
            var nova_data = $('#txt-vencimento-boleto').val();
            var mensalidade_id = $('#mensalidade_id').val();
            var socio_id = $('#boleto_socio_id').val();
            var transacao_id = $('#boleto_transacao_id').val();
            // alert('Nova data ' + nova_data);
            if (nova_data != "") {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
                modal_vencimento_boleto_off();
                load_on();
                $.ajax({
                    type: 'post',
                    data: { novo_vencimento: nova_data, mensalidade_id: mensalidade_id, socio_id: socio_id, transacao_id: transacao_id},
                    url:"{{ route('mensalidade.alterar_vencimento_boleto') }}",
                    dataType: "json",
                    success: function(resp){
                      load_off();
                      $(".texto-sucesso").html("");
                      $(".texto-sucesso").html(resp);
                      modal_sucesso_on();
                  },
                  error: function(resp){
                      alert(resp);
                      load_off();
                      $(".texto-erro").html("");
                      $(".texto-erro").html(resp.responseJSON);
                      modal_erro_on();
                      //console.log(resp);
                  },
                })
            }else{
                modal_vencimento_boleto_off();
                modal_erro_on();
                $(".texto-erro").html("");
                $(".texto-erro").html('Informe uma data valida!');
            }
        });

        $('.modal-close').on('click', function(){
            modal_sucesso_off();
            modal_erro_off();
            window.location.reload()
        });
    });



    function modal_sucesso_on(){
        //$(".modal-load").modal("hide");
        $("#modal_sucesso").modal({
             keyboard: true
        },"show");
        return false;
    }

    function modal_sucesso_off(){
        $("#modal_sucesso").modal("hide");
        return false;
    }

    function modal_erro_on(){
        //$(".modal-load").modal("hide");
        $("#modal_erro").modal({
             keyboard: true
        },"show");
        return false;
    }

    function modal_erro_off(){
        $("#modal_erro").modal("hide");
        return false;
    }

    function modal_vencimento_on(){
        $("#modal-novo-vencimento").modal("show");
    }

    function modal_vencimento_off(){
        $("#modal-novo-vencimento").modal("hide");
    }


    function modal_vencimento_boleto_on(){
        $("#modal-novo-vencimento-boleto").modal("show");
    }

    function modal_vencimento_boleto_off(){
        $("#modal-novo-vencimento-boleto").modal("hide");
    }

    function load_on(){
        $("#loading").modal({
             keyboard: true
        },"show");
        return false;
    }

    function load_off(){
            $('#loading').modal('hide');
        // $("#load").modal("hide");
        return false;
    }
</script>
@endsection
