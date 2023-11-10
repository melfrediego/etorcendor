@extends('layouts.app-metronic5')
@section('content')

        <div class="m-portlet m-portlet--mobile">
          <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                      <h3 class="m-portlet__head-text">
                        Usuário
                        <small>
                              visualiando registro..
                          </small>
                      </h3>
                  </div>
              </div>
            <!-- <div class="caption">



            </div> -->
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">

                      <li class="m-portlet__nav-item">

                          <a href="{{route('usuarios.index')}}" class="btn btn-primary m-btn m-btn--icon">
                              <span>
                                  <i class="fa fa-bars"></i>&nbsp;Listar dados
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

          <div class="m-portlet__body">

              @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div><br />
              @endif

           <form class="m-form" method="POST" action="{{ route('usuarios.update',$usuario->id) }}" enctype="multipart/form-data">

        @csrf

        @method('POST')

        <div class="m-portlet__body">
          <div class="m-form__section m-form__section--first">
            <div class="form-group m-form__group row">
              <label class="col-lg-2 col-form-label">
                Nome:
              </label>
              <div class="col-lg-8">
                <input type="text" name="name" class="form-control m-input" value="{{$usuario->name}}" placeholder="" disabled="disabled">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label class="col-lg-2 col-form-label">
                Email:
              </label>
              <div class="col-lg-8">
                <input type="text" name="email" class="form-control m-input" value="{{$usuario->email}}" placeholder="" disabled="disabled">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label class="col-lg-2 col-form-label">
                Senha:
              </label>
              <div class="col-lg-8">
                <input type="password" name="password" class="form-control m-input" value="{{$usuario->password}}" placeholder="" disabled="disabled">
              </div>
            </div>



            <div class="form-group m-form__group row">
              <label class="col-lg-2 col-form-label">
                Foto:
              </label>
              <div class="col-lg-8">
                <img src="{{ url('storage/users/'.$usuario->foto) }}" alt="" style="max-width: 80px;">
                <br>
              </div>
            </div>

          </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
          <div class="m-form__actions m-form__actions">
            <div class="row">
              <div class="col-lg-12">
                <a href="{{ route('usuarios.edit',$usuario->id) }}" class="btn btn-info">
                  <i class="fa fa-edit"></i>&nbsp;Editar Registro
                </a>
                <a href="" class="btn btn-secondary">
                  Cancelar
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>

          </div>

        </div>


@endsection
