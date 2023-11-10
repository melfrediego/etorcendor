@extends('layouts.app-metronic5')
@section('content')

        <div class="m-portlet m-portlet--mobile">
          <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                      <h3 class="m-portlet__head-text">
                        Usuários
                        <small>
                              criando novo registro..
                          </small>
                      </h3>
                  </div>
              </div>
            <!-- <div class="caption">



            </div> -->
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">

                      <li class="m-portlet__nav-item">

                          <a href="/usuarios" class="btn btn-primary m-btn m-btn--icon">
                              <span>
                                  <i class="fa fa-bars"></i>&nbsp;Listar dados

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

          <div class="m-portlet__body">

              @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br />
                @endif

              <form class="m-form" method="post" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">

				@csrf

				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">
								Nome:
							</label>
							<div class="col-lg-8">
								<input type="text" name="name" class="form-control m-input" placeholder="">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">
								Email:
							</label>
							<div class="col-lg-8">
								<input type="text" name="email" class="form-control m-input" placeholder="">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">
								Senha:
							</label>
							<div class="col-lg-8">
								<input type="password" name="password" class="form-control m-input" placeholder="">
							</div>
						</div>


{{--
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">
								Foto:
							</label>
							<div class="col-lg-8">
								<input type="file" name="foto" class="form-control m-input" placeholder="Selecione uma foto">
							</div>
						</div> --}}

						{{-- <div class="m-form__group form-group row">
							<label class="col-lg-2 col-form-label">
								Publicar:
							</label>
                            <div class="col-8">
								<div class="m-radio-inline">
									<label class="m-radio">
										<input type="radio" checked name="publicar" value="S">
										Sim
										<span></span>
									</label>
									<label class="m-radio">
										<input type="radio" name="publicar" value="N">
										Não
										<span></span>
									</label>
								</div>
							</div>
						</div> --}}


					</div>
				</div>
				{{-- <div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						@include('includes.app-actions-form-create')
					</div>
				</div> --}}
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row align-items-center">
                            <div class="col-lg-12 m--align-left">
                                <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                    <i class="fa fa-calendar-check-o"></i>&nbsp;Enviar Dados
                                </button>
                                <span class="m--margin-left-10">
                                    ou
                                    <a href="/usuarios" class="m-link m--font-bold text-danger">
                                        Cancelar
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
			</form>

          </div>

        </div>


@endsection
