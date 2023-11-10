@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Bancos
                        <small>
                            Inserindo dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/banco" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('banco.store') }}" enctype="multipart/form-data">
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


                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Numero
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="numero" id="example-text-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Nome
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="nome" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-url-input" class="col-1 col-form-label">
                        Ativo
                    </label>
                    <div class="col-10">
                        <div class="m-radio-inline">
                            <label class="m-radio">
                                <input type="radio" name="ativo" value="1">
                                Sim
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="radio" name="ativo" value="0">
                                Não
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">
                            <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                <i class="fa fa-calendar-check-o"></i>&nbsp;Enviar Dados
                            </button>
                            <span class="m--margin-left-10">
                                ou
                                <a href="/banco" class="m-link m--font-bold text-danger">
                                    Cancelar
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
