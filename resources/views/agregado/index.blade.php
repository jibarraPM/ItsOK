{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Agregados Ingresados en el Sistema</h4>
                            <span>Base de Datos de los Agregados disponibles</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Agregados</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                        </ol>
                        <div class="text-right"><a href="{!! url('/desarrollador/agregado/create'); !!}" class="btn btn-primary ">Agregar Agregado</a></div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Agregados Disponibles</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>

                                                <th>ID Agregado</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Precio</th>
                                                <th>Disponible</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>44445</td>
                                                <td>nombre</td>
                                                <td>descripcion</td>
                                                <td> <strong>precio</strong></td>
												<td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-suc mr-1"></i>
                                                        Disponible

													</span>
												</td>
                                                <td>
                                                    <form action="" method="POST">   
                                                        <div class="d-flex">
                                                            <a href="" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                                            <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>  
                                                            <a type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        
                                                    </form>

                                       
                                            
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