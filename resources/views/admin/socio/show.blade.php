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
                                <input type="text" class="form-control m-input" name="matricula" value="{{ $socio->matricula }}" disabled="disabled">
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">
                            Ativo:
                        </label>
                        <div class="col-4">

                            @if ($socio->ativo == 'S' || $socio->ativo =='s' )
                                <span class="m-badge m-badge--success m-badge--wide">
                                    Sim
                                </span>
                            @else
                                <span class="m-badge m-badge--danger m-badge--wide">
                                    Não
                                </span>
                            @endif


                        </div>

                    </div>

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">
                            Matricula:
                        </label>
                        <div class="col-4">
                            <input class="form-control m-input" type="text" name="matricula" value="{{ $socio->matricula }}" id="example-text-input" disabled="disabled">
                        </div>

                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Nome:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="nome" value="{{ $socio->nome }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            CPF:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" id="cpf" class="form-control m-input" name="cpf" value="{{ $socio->cpf }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Email:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="email" value="{{ $socio->email }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Data Nasc:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="data_nascimento" value="{{ $socio->data_nascimento }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                      <label class="col-lg-2 col-form-label">
                          Sexo:
                      </label>
                      <div class="col-lg-5">
                          <div class="m-input-icon m-input-icon--right">
                              @if ($socio->sexo == 'M')
                                  <input type="text" class="form-control m-input" name="sexo" value="Masculino" disabled="disabled">
                              @else
                                  <input type="text" class="form-control m-input" name="sexo" value="Feminino" disabled="disabled">
                              @endif
                          </div>
                      </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Estado Civil:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="estado_civil" value="{{ $socio->estado_civil }}" disabled="disabled">
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
                                <input type="text" class="form-control m-input" name="cep" value="{{ $socio->cep }}" disabled="disabled">
                            </div>
                        </div>
                      </div>

                      <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Logradouro:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="logradouro" value="{{ $socio->logradouro }}" disabled="disabled">
                            </div>
                        </div>
                      </div>

                      <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Num.:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="numero" value="{{ $socio->numero }}" disabled="disabled">
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
                                <input type="text" class="form-control m-input" name="complemento" value="{{ $socio->complemento }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Bairro:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="bairro" value="{{ $socio->bairro }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Cidade:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="cidade" value="{{ $socio->cidade }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Estado:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control m-input" name="estado" value="{{ $socio->estado }}" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">
                            Telefone:
                        </label>
                        <div class="col-lg-5">
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" id="telefone" class="form-control m-input" name="telefone" value="{{ $socio->telefone }}" disabled="disabled">
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
                                @if ($socio->local_retirada_kit == 'S')
                                    <input type="text" class="form-control m-input" name="local_retirada_kit" value="Na sede do clube" disabled="disabled">
                                @else
                                    <input type="text" class="form-control m-input" name="local_retirada_kit" value="No endereço do socio" disabled="disabled">
                                @endif

                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-12 m-form__heading">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_1">
                                    <i class="fa fa-list"></i>
                                    Mensalidades
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                                <table class="table table table-striped table-hover">
                                    <thead>
                                    <tr style="border-bottom:2px solid #E4E6EB">
                                        <th>#</th>
                                        <th>Numero</th>
                                        <th>Pedido</th>
                                        <th>Emissão:</th>
                                        <th>Vencimento:</th>

                                        <th>Valor (R$):</th>
                                        <th>Valor Pago (R$):</th>
                                        <th>Status:</th>
                                        <th>Criado em:</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($mensalidades as $key => $mensalidade)

                                    <tr>
                                        <td>{{ $mensalidade->id }}</td>
                                        <td>{{ $mensalidade->numero_mensalidade }} / 12</td>
                                        <td>{{ $mensalidade->pedido_id }}</td>
                                        <td width="140">{{ date('d/m/Y', strtotime($mensalidade->data_emissao))}}</td>
                                        <td width="140">{{ date('d/m/Y', strtotime($mensalidade->data_vencimento))}}</td>

                                        <td width="140">R$ {{ $mensalidade->valor_cobrado}}</td>
                                        <td width="140">
                                          @if ($mensalidade->valor_pago != '' || $mensalidade->valor_pago != null)
                                            <span>R$ {{ $mensalidade->valor_pago }}</span>
                                          @else
                                            <span>R$ 0,00</span>
                                          @endif

                                        </td>
                                        <td width="140">
                                            @switch($mensalidade->status)
                                                @case('paid')
                                                    <span class="m-badge  m-badge--success m-badge--wide">
                                                        <i class="fa fa-check"></i> Pago
                                                    </span>
                                                    @break
                                                @case('waiting')
                                                    <span class="m-badge  m-badge--info m-badge--wide"><i class="fa fa-clock"></i> Aguardando</span>
                                                    @break

                                                @default
                                                  <span class="m-badge m-badge--metal m-badge--wide">
                                                      <i class="fa fa-warning"></i> Pendente
                                                    </span>
                                            @endswitch
                                          </td>


                                          <td width="140">{{ date('d/m/Y', strtotime($mensalidade->created_at))}}</td>
                                        <td width="80">


                                            <a href="#" class="btn-detalhe-mensalidade btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-id="{{ $mensalidade->id }}" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                        </td>
                                    </tr>
                                  @empty
                                      <h2 class="text-center">Mensalidade</h2>
                                  @endforelse

                                </tbody>
                            </table>
                            </div>
                            <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                                Transacoes lancadas para essa mensalidade
                            </div>
                        </div>
                    </div> --}}


            </div>


            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m--align-left">
                            <a href="{{ $socio->id }}/edit"  class="btn btn-info m-btn m-btn--icon">
                                <i class="fa fa-edit"></i>&nbsp;Editar registro
                            </a>
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

  {{-- Includes Modals --}}
  @include('includes.modals')


  @endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script type="text/javascript" src="{{ asset('js/alerts-modal.js') }}"></script>

<script type="text/javascript">

$('#cpf').mask('000.000.000-00');
$('#cep').mask('00000-000');
$('#telefone').mask('(00)00000-0000');

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

    $('.btn-detalhe-mensalidade').on('click', function(){

        $(".modal-load").modal({
             keyboard: true
        },"show");
        // alert('Detalhe mensalidade');
        var id_mensalidade = $(this).data('id')

        $.ajax({
            url:"/mensalidade/"+id_mensalidade,
            dataType: "json",
            success: function(html){
              alert(html);
                $(".detalhe-mensalidade").modal("show");
            }
        })


    });

});
</script>

@endsection
