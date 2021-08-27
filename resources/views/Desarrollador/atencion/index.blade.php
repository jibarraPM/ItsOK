{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Atenciones Ingresados en el Sistema</h4>
                <span>Atenciones en el Sistema</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Atenciones</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
            </ol>
            <div class="text-right">
                <a href="{{ URL::previous() }}" class="btn btn-primary" >Volver</a>
            </div>
        </div>
    </div>
    <!-- row -->


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Atenciones General</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display" style="min-width: 845px">
                            <thead>
                                <tr>

                                    <th>ID Atención</th>
                                    <th>Id Clientes</th>
                                    <th>Nombre Cliente</th>
                                    <th>ID Restaurante</th>
                                    <th>Nombre Restaurante</th>
                                    <th>Estado</th>
                                    <th>Tipo Atención</th>
                                    <th>Valor Atención</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>12354</td>
                                    <td>1254</td>
                                    <td>Javier Ibarra</td>
                                    <td>45842</td>
                                    <td>Top Pizza</td>
                                    <td>
                                        <span class="badge light badge-success">
                                            <i class="fa fa-circle text-suc mr-1"></i>
                                            OK
                                        </span>
                                    </td>
                                    <td>Delivery</td>
                                    <td>30.990</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{!! url('/desarrollador/atencionD/show'); !!}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                            <a href="{!! url('/desarrollador/atencionD/edit'); !!}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection