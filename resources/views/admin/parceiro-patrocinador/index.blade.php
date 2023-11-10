@extends('layouts.app-metronic5')

@section('content')

<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Parceiro/Patrocinador
                  <small>
                        listando dados..
                    </small>
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/parceiro-patrocinador" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon m-btn--icon-only btn-sm btn-metal">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>
                <li class="m-portlet__nav-item">
                    <a href="/parceiro-patrocinador/create" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon-only btn-sm btn-info">
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

                <form action="{{route('parceiro-patrocinador.search')}}" method="POST" class="form-group form-inline">
                    @csrf
                    <!-- <div class="input-group"> -->
                    <input type="text" name="search" class="form-control col-md-6" placeholder="Digita sua busca..."> &nbsp;
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
                        <a href="/parceiro-patrocinador" class="btn btn-default btn-sm">
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
                            <th>Cpf/CNPJ</th>
                            <th>Nome/Razao Social</th>
                            <th>Parceiro</th>
                            <th>Patrocinador</th>
                            <th>Criado em:</th>
                            <th>Modificado em:</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($itens as $key => $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td width="150">{{ $item->cpf_cnpj }}</td>
                              <td>{{str_limit($item->nome_razao_social, $limit = 70, $end = '...')}}</td>
                              <td width="100">
                                  @if ($item->parceiro == true)
                                      <span class="m-badge m-badge--success m-badge--wide">Sim</span>
                                  @else
                                      <span class="m-badge m-badge--danger m-badge--wide">Não</span>
                                  @endif
                              </td>
                              <td width="100" class="text-center">
                                    @if ($item->patrocinador == true)
                                        <span class="m-badge m-badge--success m-badge--wide">Sim</span>
                                    @else
                                        <span class="m-badge m-badge--danger m-badge--wide">Não</span>
                                    @endif
                              </td>
                              <td width="140">{{ date('d/m/Y', strtotime($item->created_at))}}</td>
                              <td width="140">{{ date('d/m/Y', strtotime($item->updated_at))}}</td>
                              <td width="140">
                                  <a href="{{ route('parceiro-patrocinador.show',$item->id) }}" class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Ver dados"><i class="fa fa-search"></i></a>
                                  <a href="{{ route('parceiro-patrocinador.edit',$item->id) }}" class="btn btn-sm btn-info" data-skin="dark" data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Editar dados"><i class="fa fa-edit"></i></a>
                                  <a href="" class="btn btn-sm btn-danger" data-skin="dark" data-toggle-t="m-tooltip" data-placement="top" title="" data-original-title="Deletar dados" data-toggle="modal" data-target="#m_modal_1" onclick="deleteData({{$item->id}})"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                        @empty
                            <h2 class="text-center">Nenhum Parceiro Cadastrado</h2>
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
                @if (isset($dataForm)) {!! $itens->appends(request($dataForm))->render() !!} @else {!! $itens->appends(request()->except('page'))->render() !!} @endif
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" id="deleteForm" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        CONFIRMAR EXLUSÃO
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">
                        Deseja realmente excluir esse registro ?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="" class="btn btn-success" data-dismiss="modal" onclick="formSubmit()"><i class="fa fa-trash-o"></i> Sim, excluir</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- </div> -->

<!-- </div> -->

<script type="text/javascript">
    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("parceiro-patrocinador.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
</script>

@endsection
