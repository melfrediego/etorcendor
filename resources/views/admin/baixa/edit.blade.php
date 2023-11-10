@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Titulo
                        <small>
                            Subtitulo
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a routerLink="/socio" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right">
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-1 col-form-label">
                        Text
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" value="Artisanal kale" id="example-text-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Search
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="search" value="How do I shoot web" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-email-input" class="col-1 col-form-label">
                        Email
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="email" value="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-url-input" class="col-1 col-form-label">
                        URL
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="url" value="https://getbootstrap.com" id="example-url-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-tel-input" class="col-1 col-form-label">
                        Telephone
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-password-input" class="col-1 col-form-label">
                        Password
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="password" value="hunter2" id="example-password-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-1 col-form-label">
                        Number
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="number" value="42" id="example-number-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-datetime-local-input" class="col-1 col-form-label">
                        Date and time
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot">
                <div class="row align-items-center">
                    <div class="col-lg-12 m--align-left">
                        <button type="submit" class="btn btn-success m-btn m-btn--icon">
                            <i class="fa fa-calendar-check-o"></i>&nbsp;Enviar Dados
                        </button>
                        <span class="m--margin-left-10">
                            ou
                            <a href="/socio" class="m-link m--font-bold text-danger">
                                Cancelar
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
@endsection
