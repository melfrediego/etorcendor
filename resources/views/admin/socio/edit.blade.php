@extends('layouts.app-metronic5')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Socio
                        <small>
                            Visualizando dados..
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

        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('socio.update', $socio->id) }}" enctype="multipart/form-data">
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
                        <h5 class="m-form__heading-title">
                            1. Dados Pessoais e Conta:
                        </h5>
    				</div>

                    {{-- <div class="form-group m-form__group row">
                        <div class="col-lg-2">
                            <label class="col-lg-1 col-form-label">
                                Matricula:
                            </label>
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="matricula" value="{{ $socio->matricula }}">
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">
                            Ativo:
                        </label>
                        <div class="col-5">
                            <input class="form-control m-input" type="text" name="ativo" value="{{ $socio->ativo }}" id="example-text-input">
                        </div>
                    </div> --}}

                    <div class="form-group m-form__group row">
                        <label for="example-url-input" class="col-2 col-form-label">
                            Ativo *
                        </label>
                        <div class="col-10">
                            <div class="m-radio-inline">
                                <label class="m-radio">
                                    <input type="radio" name="ativo" value="1" {{ $socio->ativo == 'S' ? 'checked' : '' }} disabled="disabled" readonly>
                                    Sim
                                    <span></span>
                                </label>
                                <label class="m-radio">
                                    <input type="radio" name="ativo" value="0" {{ $socio->ativo == 'N' ? 'checked' : '' }} disabled="disabled" readonly>
                                    Não
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">
                            Matricula:
                        </label>
                        <div class="col-5">
                            <input class="form-control m-input" type="text" name="matricula" value="{{ $socio->matricula }}" id="example-text-input" readonly>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Nome:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="nome" value="{{ $socio->nome }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            CPF:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" id="cpf" class="form-control m-input" name="cpf" value="{{ $socio->cpf }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Email:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="email" value="{{ $socio->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Data Nasc:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="data_nascimento" value="{{ $socio->data_nascimento }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                      <label class="col-lg-2 col-form-label">
                          Sexo:
                      </label>
                      <div class="col-lg-5">
                          <div class="m-input-icon m-input-icon--right">
                              <select class="form-control m-input" name="sexo">
                                  <option value="M" @if ($socio->sexo == 'M') selected="selected" @endif>Masculino</option>
                                  <option value="F" @if ($socio->sexo == 'F') selected="selected" @endif>Feminino</option>

                              </select>

                              {{-- @if ($socio->sexo == 'M')
                                  <input type="text" class="form-control m-input" name="sexo" value="Masculino">
                              @else
                                  <input type="text" class="form-control m-input" name="sexo" value="Feminino">
                              @endif --}}
                          </div>
                      </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Estado Civil:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="estado_civil" value="{{ $socio->estado_civil }}">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="m-form__heading">
                        <h5 class="m-form__heading-title">
                            2. Dados Endereço / Contatos:
                        </h5>
    				              </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            CEP:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="cep" value="{{ $socio->cep }}">
                            </div>
                        </div>
                      </div>

                      <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Logradouro:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="logradouro" value="{{ $socio->logradouro }}">
                            </div>
                        </div>
                      </div>

                      <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Num.:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="numero" value="{{ $socio->numero }}">
                            </div>
                        </div>
                      </div>

                    {{-- </div> --}}

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Complemento:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="complemento" value="{{ $socio->complemento }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Bairro:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="bairro" value="{{ $socio->bairro }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Estado:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                {{-- <input type="text" class="form-control m-input" name="estado" value="{{ $socio->estado }}"> --}}
                                <select class="form-control m-input form-control" id="estado" name="estado">
                                    @foreach ($estados as $key => $estado)

                                        <option value="{{ $estado->id }}" @if ($socio->estado == $estado->id) selected="selected" @endif>{{ $estado->sigla }}</option>
                                    @endforeach
            					</select>


                                {{-- <select class="form-control m-select2" id="m_select2_6"> --}}

                                    {{-- @foreach ($estados as $estado) --}}
                                        {{-- <option value="{{ $estado->id }}" @if ($socio->estado == $estado->id) selected="selected" @endif >{{ $estado->sigla }}</option> --}}
                                        {{-- <option value="{{ $estado->id }}">{{ $estado->sigla }}</option> --}}
                                        {{-- <option></option> --}}
                                    {{-- @endforeach --}}
                                                {{-- <option value="AK">
													Alaska
												</option> --}}

											{{-- </select> --}}



                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Cidade:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <div class="m-input-icon m-input-icon--right">
                                    <select class="form-control m-input form-control" id="cidade" name="cidade">
                                        @foreach ($cidades as $key => $cidade)
                                            <option value="{{ $cidade->id }}" @if ($socio->cidade == $cidade->id) selected="selected" @endif >{{ $cidade->nome }}</option>
                                        @endforeach
                					</select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Telefone:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" id="telefone" class="form-control m-input" name="telefone" value="{{ $socio->telefone }}">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="m-form__heading">
                        <h5 class="m-form__heading-title">
                            3. Outras informações:
                        </h5>
    				          </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Local Retirada do Kit:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">

                                <select class="form-control m-input" name="local_retirada_kit">
                                    <option value="S" @if ($socio->local_retirada_kit == 'S') selected="selected" @endif>Na sede do clube</option>
                                    <option value="E" @if ($socio->local_retirada_kit == 'E') selected="selected" @endif>No endereço do sócio</option>
                                </select>


                                {{-- @if ($socio->local_retirada_kit == 'S')
                                    <input type="text" class="form-control m-input" name="local_retirada_kit" value="Na sede do clube">
                                @else
                                    <input type="text" class="form-control m-input" name="local_retirada_kit" value="No endereço do socio">
                                @endif --}}

                            </div>
                        </div>
                    </div>
            </div>


            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">
                            <button type="submit" class="btn btn-success m-btn m-btn--icon">
                                <i class="fa fa-check"></i>&nbsp;Enviar Dados
                            </button>
                            {{-- <button type="submit" class="btn btn-info m-btn m-btn--icon">
                                <i class="fa fa-edit"></i>&nbsp;Editar registro
                            </button> --}}
                            <span class="m--margin-left-10">
                                ou
                                <a href="/socio" class="m-link m--font-bold text-danger">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">

$('#cpf').mask('000.000.000-00');
$('#cep').mask('00000-000');
$('#telefone').mask('(00)00000-0000');

$(function(){

    //Busca Cidade do estado setado para nao trazer todas as cidades
    // $.get("/socio/get-cidade/" + {{$socio->estado}}, function (cidades) {
    //     var Options = "";
    //     $.each(cidades, function (key, value) {
    //         Options = Options + '<option value=' + value.id + '>' + value.nome + '</option>';
    //     });
    //     $('#cidade').empty();
    //     $('#cidade').append(Options);
    //     $("#cidade").formSelect()
    // });


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

});

//Povoando Cidades
$("#estado").change(function(){
    var idEstado = $("#estado").val();
    $.get("/socio/get-cidade/" + idEstado, function (cidades) {
        var Options = "";
        $.each(cidades, function (key, value) {
            Options = Options + '<option value=' + value.id + '>' + value.nome + '</option>';
        });
        $('#cidade').empty();
        $('#cidade').append(Options);
        $("#cidade").formSelect()
    });
});
</script>

@endsection
