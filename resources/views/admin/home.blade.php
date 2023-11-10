@extends('layouts.app-metronic5')

@section('content')
    {{-- <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Painel
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__separator">></li>
                        <li class="m-nav__item m-nav__item--home">
                            Resumo das atividades recentes do sistema
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- END: Subheader -->

        {{-- <div class="m-content"> --}}

        <div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
            <div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-technology"></i>
						</span>
						<h3 class="m-portlet__head-text">
							GerenciaNet (API 5.8)
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<a href="/" type="button" class="m-btn btn btn-secondary">
							<i class="la la-refresh"></i>
						</a>
						{{-- <button type="button" class="m-btn btn btn-secondary">
							<i class="la la-floppy-o"></i>
						</button>
						<button type="button" class="m-btn btn btn-secondary">
							<i class="la la-header"></i>
						</button> --}}
						{{-- <div class="btn-group" role="group">
							<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" href="#">
									Dropdown link
								</a>
								<a class="dropdown-item" href="#">
									Dropdown link
								</a>
								<a class="dropdown-item" href="#">
									Dropdown link
								</a>
								<a class="dropdown-item" href="#">
									Dropdown link
								</a>
							</div>
						</div> --}}
					</div>
				</div>
			</div>

            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-xl-4">

                        <div class="m-widget14">
                            <div class="m-widget14__header m--margin-bottom-30">
                                <h3 class="m-widget14__title">
                                    Saldo em Conta:
                                </h3>
                                <span class="m-widget14__desc">
                                    Periodo: 10/2019 a {{ date('m/Y') }}.
                                </span>

                                {{-- <button type="button" name="button"></button> --}}
                                {{-- <span class="m-widget14__desc">
                                    Atualizado a cada 5min.
                                </span> --}}
                            </div>
                            <div class="m-widget14__chart" style="height:120px;">
                                {{-- R$ 5.407,57 --}}
                                <h1 class="m--font-success" style="font-size: 3rem; font-weight:bold; color: ">
                                    {{  'R$ '.number_format($saldo_conta, 2, ',', '.') }}
                                </h1>
                                {{-- <canvas  id="m_chart_daily_sales"></canvas> --}}


                            </div>
                        </div>

                    </div>


                    <div class="col-xl-4">

                        <div class="m-widget14">
                            <div class="m-widget14__header">
                                <h3 class="m-widget14__title">
                                    Ultimos confirmações
                                </h3>
                                <span class="m-widget14__desc">
                                    Dados Financeiros
                                </span>

                                <div class="table-responsive">
									<table class="table">
										<tbody style="font-size:11px;">
                                            @foreach ($ultimas_transacoes_pagas as $key => $ultima_transacao_paga)
											<tr>
												<td class="m--font-info">
													{{ date('d/m', strtotime($ultima_transacao_paga->updated_at)) }}
												</td>
												<td class="m--font-info">
                                                    {{-- {{str_limit($ultima_transacao_paga->pedido->socio->nome, $limit = 30, $end = '...')}} --}}
                                                    {{str_limit($ultima_transacao_paga->pedido->socio->nome, $limit = 20, $end = '...')}}
													{{-- {{$ultima_transacao_paga->pedido->socio->nome}} --}}
												</td>
												<td class="m--font-success">

                                                    <b>{{  'R$ '.number_format($ultima_transacao_paga->valor_cobrado, 2, ',', '.') }}</b>
												</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>



                                {{-- <table>
                                    @foreach ($ultimas_transacoes_pagas as $key => $ultima_transacao_paga)
                                        <tr>
                                            <td>01/07</td>
                                            <td>JOSE DE SOUSA MELO</td>
                                            <td>R$ 70,00</td>
                                        </tr>
                                    @endforeach

                                </table> --}}
                            </div>
                            {{-- <div class="row  align-items-center">
                                <div class="col">
                                    <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                        <div class="m-widget14__stat">
                                            45
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="m-widget14__legends">
                                        <div class="m-widget14__legend">
                                            <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget14__legend-text">
                                                37% Pagos
                                            </span>
                                        </div>
                                        <div class="m-widget14__legend">
                                            <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                            <span class="m-widget14__legend-text">
                                                47% A Receber
                                            </span>
                                        </div>
                                        <div class="m-widget14__legend">
                                            <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                            <span class="m-widget14__legend-text">
                                                19% inadiplentes
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <div class="m-widget1">
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">
                                            Recebibos Hoje
                                        </h3>
                                        <span class="m-widget1__desc">
                                            {{ date('d/m/Y') }}
                                        </span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-focus">
                                            {{  'R$ '.number_format($mensalidades_recebidas_hoje, 2, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">
                                            Na semana
                                        </h3>
                                        <span class="m-widget1__desc">
                                            Perido:
                                        </span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-accent">
                                            {{  'R$ '.number_format($mensalidades_recebidas_semana, 2, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">
                                            No mês
                                        </h3>
                                        <span class="m-widget1__desc">
                                            Perido:
                                        </span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-info">
                                            {{  'R$ '.number_format($mensalidades_recebidas_mes, 2, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->







            <!-- <h1>Dashboard</h1> -->
            <div class="m-portlet ">
                <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::Total Profit-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Socios
                                    </h4>
                                    <br>
                                    <span class="m-widget24__desc">
                                        Total de cadastros
                                    </span>
                                    <span class="m-widget24__stats m--font-brand">
                                        {{ $socios_cadastrados }}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget24__change">
                                        Dados
                                    </span>
                                    <span class="m-widget24__number">
                                        78%
                                    </span>
                                </div>
                            </div>
                            <!--end::Total Profit-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Feedbacks-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Planos
                                    </h4>
                                    <br>
                                    <span class="m-widget24__desc">
                                        Total de planos
                                    </span>
                                    <span class="m-widget24__stats m--font-info">
                                        {{$planos_cadastrados}}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget24__change">
                                        Change
                                    </span>
                                    <span class="m-widget24__number">
                                        84%
                                    </span>
                                </div>
                            </div>
                            <!--end::New Feedbacks-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Orders-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Contatos(Tickets)
                                    </h4>
                                    <br>
                                    <span class="m-widget24__desc">
                                        Tickets recebibos
                                    </span>
                                    <span class="m-widget24__stats m--font-danger">
                                        {{$tickets_cadastrados}}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget24__change">
                                        Change
                                    </span>
                                    <span class="m-widget24__number">
                                        69%
                                    </span>
                                </div>
                            </div>
                            <!--end::New Orders-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Users-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Parceiros Comerciais
                                    </h4>
                                    <br>
                                    <span class="m-widget24__desc">
                                        Total de parceiros
                                    </span>
                                    <span class="m-widget24__stats m--font-success">
                                        {{$parceiros_cadastrados}}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget24__change">
                                        Change
                                    </span>
                                    <span class="m-widget24__number">
                                        90%
                                    </span>
                                </div>
                            </div>
                            <!--end::New Users-->
                        </div>
                    </div>
                </div>
            </div>




            <!-- Mais Informações -->
            <div class="row">
                <div class="col-xl-12">
                    <!--begin:: Widgets/Best Sellers-->
                    <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Socios/Planos
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_widget5_tab1_content" role="tab" aria-selected="true">
                                            Ultimos cadastros
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab" aria-selected="false">
                                            Semana
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                                            Mês
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Content-->
                            <div class="tab-content">
                                <div class="tab-pane active show" id="m_widget5_tab1_content" aria-expanded="true">
                                    <!--begin::m-widget5-->
                                    <div class="m-widget5">

                                        <table class="table table-hover">
                                            <thead>
                                                {{--
                                                <tr>
                                                    <th>#</th>
                                                    <th>@sortablelink('nome')</th>
                                                    <th>@sortablelink('created_at', 'Crieado em:')</th>
                                                    <th>@sortablelink('updated_at', 'Modificado em'):</th>
                                                    <th></th>
                                                </tr> --}}
                                                <tr>
                                                    <th>#</th>
                                                    <th>Matricula</th>
                                                    <th>CPF</th>
                                                    <th>Nome</th>
                                                    <th>Data Nasc.</th>
                                                    <th>Ativo:</th>
                                                    {{-- <th>Criado em:</th>
                                                    <th>Modificado em:</th> --}}
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($cadastro_socio_dia as $key => $socio_dia)
                                                  <tr>
                                                      <td>{{ $socio_dia->id }}</td>
                                                      <td>{{ $socio_dia->matricula }}</td>
                                                      <td>{{ $socio_dia->cpf }}</td>
                                                      <td>{{str_limit($socio_dia->nome, $limit = 70, $end = '...')}} </td>
                                                      <td width="140">{{ date('d/m/Y', strtotime($socio_dia->data_nascimento))}}</td>
                                                      <td width="100" class="text-center">
                                                          @if ($socio_dia->ativo == 'S')
                                                          <span class="m-badge m-badge--success m-badge--wide">Sim</span> @else
                                                          <span class="m-badge m-badge--danger m-badge--wide">Não</span> @endif
                                                      </td>
                                                      {{-- <td width="140">{{ date('d/m/Y', strtotime($socio_dia->created_at))}}</td>
                                                      <td width="140">{{ date('d/m/Y', strtotime($socio_dia->updated_at))}}</td> --}}
                                                      <td width="50">
                                                          <a href="{{ route('socio.show',$socio_dia->id) }}" class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                                          {{-- <a href="{{ route('socio.edit',$socio_dia->id) }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Editar dados"><i class="fa fa-edit"></i></a> --}}
                                                          {{-- <a href="" class="btn btn-sm btn-danger" data-skin="dark" data-toggle-t="m-tooltip" data-placement="top" title="" data-original-title="Deletar dados" data-toggle="modal" data-target="#m_modal_1" onclick="deleteData({{$socio->id}})"><i class="fa fa-trash"></i></a> --}}
                                                      </td>
                                                  </tr>
                                                @empty
                                                    <h2 class="text-center">Nenhum Socio Cadastrado</h2>
                                                @endforelse

                                            </tbody>
                                        </table>


                                        {{-- <div class="row align-items-center">
                                            <div class="col-md-6">
                                                Mostrando <b>1</b> de <b>20</b> para (<b>1000</b> registros), mostrar
                                                <select class="m-input form-control-sm">
                                                    <option selected="">20</option>
                                                    <option value="1">40</option>
                                                    <option value="2">60</option>
                                                    <option value="3">80</option>
                                                </select>
                                                por página.
                                            </div>

                                            <div class="col-md-6 m--align-right text-right">
                                                @if (isset($dataForm)) {!! $cadastro_socio_dia->appends(request($dataForm))->render() !!} @else {!! $cadastro_socio_dia->appends(request()->except('page'))->render() !!} @endif
                                            </div>
                                        </div> --}}
                                    </div>
                                    <!--end::m-widget5-->
                                </div>
                                <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                                    <!--begin::m-widget5-->
                                    <div class="m-widget5">
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Branding Mockup
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    24,583
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    sales
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    3809
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Great Logo Designn
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    19,200
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    sales
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    1046
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Awesome Mobile App
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    10,054
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    sales
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    1103
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::m-widget5-->
                                </div>
                                <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                                    <!--begin::m-widget5-->
                                    <div class="m-widget5">
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Branding Mockup
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    10.054
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    sales
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    1103
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Great Logo Designn
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    24,583
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    sales
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    3809
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-widget5__item">
                                            <div class="m-widget5__pic">
                                                <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Awesome Mobile App
                                                </h4>
                                                <span class="m-widget5__desc">
                                                    Make Metronic Great  Again.Lorem Ipsum Amet
                                                </span>
                                                <div class="m-widget5__info">
                                                    <span class="m-widget5__author">
                                                        Author:
                                                    </span>
                                                    <span class="m-widget5__info-author m--font-info">
                                                        Fly themes
                                                    </span>
                                                    <span class="m-widget5__info-label">
                                                        Released:
                                                    </span>
                                                    <span class="m-widget5__info-date m--font-info">
                                                        23.08.17
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-widget5__stats1">
                                                <span class="m-widget5__number">
                                                    19,200
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    1046
                                                </span>
                                            </div>
                                            <div class="m-widget5__stats2">
                                                <span class="m-widget5__number">
                                                    1046
                                                </span>
                                                <br>
                                                <span class="m-widget5__votes">
                                                    votes
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::m-widget5-->
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>



                    </div>
                    <!--end:: Widgets/Best Sellers-->
                </div>

            </div>


        {{-- </div>

    </div> --}}
@endsection
