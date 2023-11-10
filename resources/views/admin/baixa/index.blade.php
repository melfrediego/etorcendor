@extends('layouts.app-metronic5')

@section('content') {{--
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                Painel
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                        Planos
                    </a>
                </li>
                <li class="m-nav__separator">></li>
                <li class="m-nav__item m-nav__item--home">
                    Listagem
                </li>
                <!-- <li class="m-nav__separator">></li> -->

            </ul>
        </div>
    </div>
</div> --}}
<!-- END: Subheader -->

<!-- <div class="container-fluid">
      <div class="col-md-12"> -->

<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Baixa Manual
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
                    <a href="/socio/create" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon-only btn-sm btn-info">
                        <i class="la la-plus"></i> Adicionar
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

                <form action="" method="POST" class="form-group form-inline">
                    @csrf
                    <!-- <div class="input-group"> -->
                    <input type="text" name="search" class="form-control col-md-6" placeholder="Digita sua busca...Matricula, CPF, Nome"> &nbsp;
                    <select name="publicado" class="form-control m-input form-control col-md-2" id="exampleSelect1" placeholder="">
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
                <table class="table table-bordered table-hover">
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
                            <th>Criado em:</th>
                            <th>Modificado em:</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($socios as $key => $socio)
                          <tr>
                              <td>{{ $socio->id }}</td>
                              <td>{{ $socio->matricula }}</td>
                              <td>{{ $socio->cpf }}</td>
                              <td>{{str_limit($socio->nome, $limit = 70, $end = '...')}} </td>
                              <td width="140">{{ date('d/m/Y', strtotime($socio->data_nascimento))}}</td>
                              <td width="100" class="text-center">
                                  @if ($socio->ativo == 'S')
                                  <span class="m-badge m-badge--success m-badge--wide">Sim</span> @else
                                  <span class="m-badge m-badge--danger m-badge--wide">Não</span> @endif
                              </td>
                              <td width="140">{{ date('d/m/Y', strtotime($socio->created_at))}}</td>
                              <td width="140">{{ date('d/m/Y', strtotime($socio->updated_at))}}</td>
                              <td width="100">
                                  <a href="{{ route('socio.show',$socio->id) }}" class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                  <a href="{{ route('socio.edit',$socio->id) }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Editar dados"><i class="fa fa-edit"></i></a>
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
{{--
            <div class="col-md-6 m--align-right text-right">
                @if (isset($dataForm)) {!! $socios->appends(request($dataForm))->render() !!} @else {!! $socios->appends(request()->except('page'))->render() !!} @endif
            </div> --}}
        </div>

    </div>
</div>
<!-- </div> -->

<!-- </div> -->

@endsection