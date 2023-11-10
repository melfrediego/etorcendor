@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Mensalidades
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

                <div class="m-form__heading">
					<h3 class="m-form__heading-title">
						Sócio Torcedor
						<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Dados do sócio"></i>
					</h3>
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
						Matricula:
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

                <br>

                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_1">
                                <i class="fa fa-list"></i>
                                Mensalidades
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#m_tabs_1_2">
                                <i class="fa fa-money"></i>
                                Transacao Lancada
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numero</th>
                                    <th>Pedido</th>
                                    <th>Data Emissao:</th>
                                    <th>Data Vencimento:</th>
                                    <th>Data Pagamento:</th>
                                    <th>Status:</th>
                                    <th>Valor:</th>
                                    <th>Valor Pago:</th>
                                    <th>Criado em:</th>
                                    <th>Modificado em:</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $mensalidade->id }}</td>
                                        <td>{{ $mensalidade->numero_mensalidade }} / 12</td>
                                        <td>{{ $mensalidade->pedido_id }}</td>
                                        <td>{{ date('d/m/Y', strtotime($mensalidade->data_emissao)) }}</td>
                                        <td>{{ date('d/m/Y', strtotime($mensalidade->data_vencimento)) }}</td>

                                        <td>
                                            @if (empty($mensalidade->data_pagamento))
                                                --
                                            @else
                                                {{ date('d/m/Y', strtotime($mensalidade->data_pagamento)) }}
                                            @endif
                                        </td>


                                        <td width="130" class="text-center">
                                            @if ($mensalidade->status == 'paid')
                                                <span class="m-badge m-badge--success m-badge--wide">Pago</span>
                                            @elseif ($mensalidade->status == 'waiting')
                                                <span class="m-badge m-badge--danger m-badge--wide">Aguardando</span>
                                            @else
                                                <span class="m-badge m-badge--danger m-badge--wide">Pendente</span>
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
                                        <td width="140">{{ date('d/m/Y', strtotime($mensalidade->updated_at))}}</td>
                                    </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                            Transacoes lancadas para essa mensalidade
                        </div>

                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">
                            <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                <i class="fa fa-calendar-check-o"></i>&nbsp;Informar Pagamento
                            </button>
                            <span class="m--margin-left-10">
                                ou
                                <a href="/mensalidade" class="m-link m--font-bold text-danger">
                                    voltar
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
@endsection
