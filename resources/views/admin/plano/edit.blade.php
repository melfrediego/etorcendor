@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Plano
                        <small>
                            Editando dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/plano" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('plano.update', $plano->id) }}" enctype="multipart/form-data">
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
                        Nome *
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="nome" value="{{ $plano->nome }}" id="example-text-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Titulo *
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="titulo" value="{{ $plano->titulo }}" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Descricao *
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="descricao" value="{{ $plano->descricao }}" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Valor *
                    </label>
                    <div class="col-4">
                        <input class="form-control m-input" type="text" name="valor" value="{{ $plano->valor }}" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Validade
                    </label>
                    <div class="col-4">
                        <input class="form-control m-input" type="date" name="validade" value="{{ $plano->validade }}" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Carteira Frente *
                    </label>
                    <div class="col-6">
                        <img src="{{ url('storage/'.$plano->imagem_carteira_frente) }}" alt="" style="max-width: 80px;">
                        <br>
                        <br>
                        <input type="file" name="imagem_carteira_frente" class="form-control m-input" placeholder="Selecione uma imagem">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Carteira Verso
                    </label>
                    <div class="col-6">
                        <img src="{{ url('storage/'.$plano->imagem_carteira_verso) }}" alt="" style="max-width: 80px;">
                        <br>
                        <br>
                        <input type="file" name="imagem_carteira_verso" class="form-control m-input" placeholder="Selecione uma imagem">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-url-input" class="col-1 col-form-label">
                        Ativo *
                    </label>
                    <div class="col-10">
                        <div class="m-radio-inline">
                            <label class="m-radio">
                                <input type="radio" name="ativo" value="1" {{ $plano->ativo == true ? 'checked' : '' }}>
                                Sim
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="radio" name="ativo" value="0" {{ $plano->ativo == false ? 'checked' : '' }}>
                                Não
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <label for="example-search-input" class="col-1 col-form-label">
            Validade
        </label>
        <div class="col-4">
        <input class="form-control m-input" type="date" name="validade" id="example-search-input">
    </div> --}}
    {{-- <div class="col-12">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_1">
    <i class="la la-exclamation-triangle"></i>
    Vantagens
</a>
</li>
<li class="nav-item">
<a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_2">
<i class="la la-exclamation-triangle"></i>
Imagens Carterinha *
</a>
</li>
</ul>

<div class="tab-content" style="margin-bottom:40px;">
<div class="tab-pane active show" id="m_tabs_1_1" role="tabpanel" style="padding:10px 20px;">
Vantagens
<fieldset id="buildyourform">
<legend>Build your own form!</legend>
</fieldset>
<input type="button" value="Preview form" class="add" id="preview" />
<input type="button" value="Add a field" class="add" id="add" />
</div>
<div class="tab-pane active show" id="m_tabs_1_2" role="tabpanel">
<div class="form-group m-form__group row">
<label for="example-search-input" class="col-1 col-form-label">
Frente *
</label>
<div class="col-6">
<input type="file" name="imagem_carteira_frete" class="form-control m-input" placeholder="Selecione uma imagem">
</div>
</div>

<div class="form-group m-form__group row">
<label for="example-search-input" class="col-1 col-form-label">
Verso
</label>
<div class="col-6">
<input type="file" name="imagem_carteira_verso" class="form-control m-input" placeholder="Selecione uma imagem">
</div>
</div>
</div>
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
                    <a href="/plano" class="m-link m--font-bold text-danger">
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
