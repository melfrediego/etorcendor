@extends('layouts.app-metronic5')

@section('content')

<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Socio Torcedor
                  <small>
                        Listando dados..
                    </small>
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/socio" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon m-btn--icon-only btn-sm btn-metal">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>
                <li class="m-portlet__nav-item">
                    {{-- <a href="/socio/create" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon-only btn-sm btn-info">
                        <i class="la la-plus"></i> Adicionar
                    </a> --}}
                </li>
            </ul>
        </div>

        <div class="actions">

            <!-- <app-simples-button #refresh></app-simples-button>
              <app-simples-button #fullScreen></app-simples-button> -->
        </div>
    </div>

    <div class="m-portlet__body">

        @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>
                Sucesso!
            </strong> {{ session()->get('success') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-8">

                <form action="{{route('socio.search')}}" method="POST" class="form-group form-inline">
                    @csrf
                    <!-- <div class="input-group"> -->
                    <input type="text" name="search" class="form-control col-md-6" placeholder="Digita sua busca...Matricula, CPF, Nome"> &nbsp;
                    <select name="ativo" class="form-control m-input form-control col-md-2" id="exampleSelect1" placeholder="">
                        <option value="">Ativo</option>
                        <option value="S">Sim</option>
                        <option value="N">Nâo</option>
                    </select>
                    &nbsp;
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            Buscar
                        </button>
                        &nbsp;
                        <a href="/socio" class="btn btn-default btn-sm">
                            <i class="fa fa-paint-brush"></i>&nbsp;&nbsp;
                        </a>
                    </div>
                    <!-- </div> -->
                </form>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
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
                            <th>Telefone</th>
                            <th>Ativo:</th>
                            <th>Criado em:</th>
                            {{-- <th>Modificado em:</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($socios as $key => $socio)
                          <tr>
                              <td>{{ $socio->id }}</td>
                              <td>{{ $socio->matricula }}</td>
                              <td><span class="mask_cpf">{{ $socio->cpf }}</span></td>
                              <td><span class="m--font-transform-u">{{str_limit($socio->nome, $limit = 70, $end = '...')}} </span> </td>
                              <td width="140">{{ date('d/m/Y', strtotime($socio->data_nascimento))}}</td>
                              <td width="140"><span class="mask_fone">{{ $socio->telefone }}</span></td>
                              <td width="100" class="text-center">
                                  @if ($socio->ativo == 'S')
                                  <span class="m-badge m-badge--success m-badge--wide">Sim</span> @else
                                  <span class="m-badge m-badge--danger m-badge--wide">Não</span> @endif
                              </td>
                              <td width="140">{{ date('d/m/Y', strtotime($socio->created_at))}}</td>
                              {{-- <td width="140">{{ date('d/m/Y', strtotime($socio->updated_at))}}</td> --}}
                              <td width="220">
                                  <a href="{{ route('socio.show',$socio->id) }}" class="btn btn-primary active m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                  <a href="{{ route('socio.edit',$socio->id) }}" class="btn btn-sm active btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Editar dados"><i class="fa fa-edit"></i></a>
                                  {{-- <a href="{{ route('socio.socio_mensalidade',$socio->id) }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Mensalidades"><i class="fa fa-dollar-sign"></i></a> --}}



                                  {{-- Mais Ações --}}
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-sm btn-default" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Mais ações">
                                          {{-- <i class="fa fa-barcode" aria-hidden="true"></i>  --}}
                                          Mais ações
                                      </button>

                                      <button type="button" class="btn btn-sm btn-default active dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Detalhes Boleto">
                                          <span class="sr-only">
                                              Toggle Dropdown
                                          </span>
                                      </button>

                                      <div class="dropdown-menu dropdown-menu-right"x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(194px, -188px, 0px);">
                                          {{-- <a class="dropdown-item" href="{{ route('mensalidade.mensalidade_socio',$socio->id) }}">
                                              <b><i class="fa fa-search" aria-hidden="true"></i></b> Visualizar
                                          </a>

                                          <a class="dropdown-item" href="{{ route('mensalidade.mensalidade_socio',$socio->id) }}">
                                              <i class="fa fa-edit" aria-hidden="true"></i> Editar
                                          </a> --}}

                                          <a class="dropdown-item" href="{{ route('mensalidade.mensalidade_socio',$socio->id) }}">
                                              <i class="fa fa-usd" aria-hidden="true"></i> Mensalidades
                                          </a>
                                          <a class="dropdown-item btn-gerar-senha" href="#" data-id="{{ $socio->id }}">
                                              <i class="fa fa-lock" aria-hidden="true"></i> Gerar Nova Senha
                                          </a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item btn-ativar-socio" data-id="{{ $socio->id }}">
                                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ativar
                                          </a>
                                      </div>
                                  </div>


                                  {{-- <a href="{{ route('mensalidade.mensalidade_socio',$socio->id) }}" class="btn btn-sm btn-secundary" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Mensalidades"><i class="fa fa-usd" aria-hidden="true"></i></a> --}}

                                  {{-- Regra para ver somente usuario Melfre e Ranni --}}
                                  {{-- <button data-id="{{ $socio->id }}" class="btn btn-sm btn-secondary active btn-gerar-senha" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Gerar Senha"><i class="fa fa-lock"></i></button>
                                  @if ($socio->ativo == 'S')
                                      <button class="btn btn-sm btn-secondary" disabled="disabled"><i class="fa fa-check"></i></button>
                                  @else
                                      <button data-id="{{ $socio->id }}" class="btn btn-sm btn-success btn-ativar-socio" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ativar"><i class="fa fa-check"></i></button>
                                  @endif --}}

                                  {{-- <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-default">Ações</button>
                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                        <a class="dropdown-item" href="#"><i class="la la-plus"></i> New Report</a>
                                        <a class="dropdown-item" href="#"><i class="la la-user"></i> Add Customer</a>
                                        <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                                    </div>
                                </div> --}}

                                {{-- <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon btn-sm btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acoes <i class="flaticon-more"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" style="">
                                <a class="dropdown-item" href="#"><i class="la la-plus"></i> New Report</a>
                                <a class="dropdown-item" href="#"><i class="la la-user"></i> Add Customer</a>
                                <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                            </div>
                        </div> --}}


                                  {{-- <a href="" class="btn btn-sm btn-danger" data-skin="dark" data-toggle-t="m-tooltip" data-placement="top" title="" data-original-title="Deletar dados" data-toggle="modal" data-target="#m_modal_1" onclick="deleteData({{$socio->id}})"><i class="fa fa-trash"></i></a> --}}
                              </td>
                          </tr>
                        @empty
                            <h2 class="text-center">Nenhum Socio Cadastrado</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row align-items-center">
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
                @if (isset($dataForm)) {!! $socios->appends(request($dataForm))->render() !!} @else {!! $socios->appends(request()->except('page'))->render() !!} @endif
            </div>
        </div>

    </div>
</div>
<!-- </div> -->

<!-- </div> -->

@include('includes.modals')


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
{{-- <script type="text/javascript" src="{{ asset('js/alerts-modal.js') }}"></script> --}}

<script type="text/javascript">
    $(document).ready(function(){
        $('.mask_cpf').mask('000.000.000-00');
        //$('#cep').mask('00000-000');
        $('.mask_fone').mask('(00)00000-0000');

        // Ativar Socio
        $(".btn-ativar-socio").on("click", function(){
            var id_socio = $(this).data('id');
            load_on();
            $.ajax({
                url:"/socio/ativar/"+id_socio,
                dataType: "json",
                success: function(resp){
                  alert(resp);
                  load_off();
                  modal_sucesso_on();
                  $(".texto-sucesso").html("");
                  $(".texto-sucesso").html(resp);
                }
            })
        });

        // Gerar Senha
        $(".btn-gerar-senha").on("click", function(){
            var id_socio = $(this).data('id');
            load_on();
            $.ajax({
                url:"/socio/gera_senha/"+id_socio,
                dataType: "json",
                success: function(resp){
                    // console.log(resp);
                  // alert(resp);
                  load_off();
                  modal_sucesso_on();
                  $(".texto-sucesso").html("");
                  $(".texto-sucesso").html(resp);
                }
            })
            // alert('Gerar Senha');
        });

        $('.modal-close').on('click', function(){
            modal_sucesso_off();
            window.location.href="/socio";
        });
    });

    function load_on(){
        $(".modal-load").modal({
             keyboard: true
        },"show");
        return false;
    }

    function load_off(){
        $(".modal-load").modal("hide");
        return false;
    }

    function modal_sucesso_on(){
        $(".modal-sucesso").modal({
             keyboard: true
        },"show");
        return false;
    }

    function modal_sucesso_off(){
        $(".modal-sucesso").modal("hide");
        return false;
    }
</script>
@endsection
