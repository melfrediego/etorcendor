@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Solicitação Retirada Financeira
                        <small>
                            Inserindo dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/solicitacao-retirada-financeira" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('solicitacao-retirada-financeira.store') }}" enctype="multipart/form-data">
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
                    <label for="example-url-input" class="col-1 col-form-label">
                        Tipo Pessoa:
                    </label>
                    <div class="col-10">
                        <div class="m-radio-inline">
                            <label class="m-radio">
                                <input type="radio" name="tipo_pessoa" value="PF">
                                Pessoa Fisica
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="radio" name="tipo_pessoa" value="PJ">
                                Pessoa Juridica
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Nome Titular Conta:
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="nome" id="example-text-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        CPF/CNPJ:
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="cpf_cnpj" id="example-text-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Banco:
                    </label>
                    <div class="col-10">
                        <select name="banco_id" class="form-control m-input">
                            <option value="-1">Selecione um banco...</option>
                            @foreach ($bancos as $key => $banco)
                                <option value="{{$banco->id}}">{{$banco->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Agência Número/Digito:
                    </label>
                    <div class="col-6">
                        <input class="form-control m-input" type="text" name="agencia_numero" id="example-text-input">
                    </div>
                    <div class="col-2">
                        <input class="form-control m-input" type="text" name="agencia_digito" id="example-text-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Conta Número/Digito:
                    </label>
                    <div class="col-6">
                        <input class="form-control m-input" type="text" name="conta_numero" id="example-text-input">
                    </div>
                    <div class="col-2">
                        <input class="form-control m-input" type="text" name="conta_digito" id="example-text-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Tipo Conta:
                    </label>
                    <div class="col-10">
                        <select name="tipo_conta" class="form-control m-input">
                            <option value="CC">Conta Corrente</option>
                            <option value="CP">Conta Poupança </option>
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Valor RS:
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="valor_solicitado" id="example-text-input">
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
                                <a href="/solicitacao-retirada-financeira" class="m-link m--font-bold text-danger">
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
