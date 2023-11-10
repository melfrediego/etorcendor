@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Plano
                        <small>
                            Inserindo dados..
                        </small>
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/faq" class="btn btn-primary m-btn m-btn--icon">
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('plano.store') }}" enctype="multipart/form-data">
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
                        <input class="form-control m-input" type="text" name="nome" id="example-text-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Titulo *
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="titulo" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Descricao *
                    </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="text" name="descricao" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Valor *
                    </label>
                    <div class="col-4">
                        <input class="form-control m-input" type="text" name="valor" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Validade
                    </label>
                    <div class="col-4">
                        <input class="form-control m-input" type="date" name="validade" id="example-search-input">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Carteira Frente *
                    </label>
                    <div class="col-6">
                        <input type="file" name="imagem_carteira_frente" class="form-control m-input" placeholder="Selecione uma imagem">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-1 col-form-label">
                        Carteira Verso
                    </label>
                    <div class="col-6">
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
                                <a href="/faq" class="m-link m--font-bold text-danger">
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
    {{-- <script>


    $(function(){
        $("#add").click(function() {

            var lastField = $("#buildyourform div:last");
            var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
            var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
            fieldWrapper.data("idx", intId);
            var fName = $("<input type=\"text\" class=\"fieldname\" />");
            var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
            var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
            removeButton.click(function() {
                $(this).parent().remove();
            });
            fieldWrapper.append(fName);
            fieldWrapper.append(fType);
            fieldWrapper.append(removeButton);
            $("#buildyourform").append(fieldWrapper);
        });
        $("#preview").click(function() {
            $("#yourform").remove();
            var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
            $("#buildyourform div").each(function() {
                var id = "input" + $(this).attr("id").replace("field","");
                var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
                var input;
                switch ($(this).find("select.fieldtype").first().val()) {
                    case "checkbox":
                        input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                        break;
                    case "textbox":
                        input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
                        break;
                    case "textarea":
                        input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                        break;
                }
                fieldSet.append(label);
                fieldSet.append(input);
            });
            $("body").append(fieldSet);
        });
    });
        </script> --}}
@endsection
