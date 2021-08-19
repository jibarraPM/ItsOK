{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Registro de Local</h4>
                    <span>Local</span>
                </div>
            </div>
            <div class="col-sm- p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Registro</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Local</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos del Local</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control input-default " placeholder="Nombre del Local">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="RUT">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Razón Social">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Giro">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Descripcion">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Horario de Atención">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Ubicación GPS">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Logo Local">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Entidad Financiera">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Tipo de Cuenta">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Numero de Cuenta">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Registrar Restaurante</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
