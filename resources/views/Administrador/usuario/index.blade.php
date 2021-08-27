{{-- Extends layout --}}
@extends('layout.defaultAdministrador')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Clientes Ingresados en el Sistema</h4>
                            <span>Base de Datos de los Clientes Disponibles</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Clientes</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                        </ol>
                        
                    </div>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clientes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>

                                                <th>ID Cliente</th>
                                                <th>Nombre</th>
                                                <th>apellido</th>
                                                <th>email</th>
                                                <th>telefono</th>
                                                <th>Estado</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>12354</td>
                                                <td>Javier</td>
                                                <td>Ibarra</td>
                                                <td>javierinuzuka@gmail.com</td>
                                                <td>94988986</td>
												<td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-suc mr-1"></i>
														OK
													</span>
												</td>
                                                <td>
                                                <div class="d-flex">
                                            <a href="{!! url('/administrador/usuarioA/show'); !!}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                            <a href="{!! url('/administrador/menu/1/edit'); !!}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
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