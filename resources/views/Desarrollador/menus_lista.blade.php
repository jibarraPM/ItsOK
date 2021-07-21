{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Menus Ingresados en el Sistema</h4>
                            <span>Base de Datos de los menus disponibles</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Menus</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                        </ol>
                        <div class="text-right"><a href="{!! url('/desarrollador/menu/create'); !!}" class="btn btn-primary ">Agregar Menu</a></div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menus Disponibles</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>

                                                <th>ID Menu</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Ingredientes</th>
                                                <th>Precio</th>
                                                <th>Disponible</th>
                                                <th>Tiempo Elaboración</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['menus'] as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nombre}}</td>
                                                <td>{{$item->descripcion}}</td>
                                                <td>{{$item->ingredientes}}</td>
                                                <td> <strong> {{$item->precio}}</strong></td>
												<td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-suc mr-1"></i>
														{{$item->disponible}}
													</span>
												</td>
                                                <td>{{$item->tiempoElavoracion}}</td>
                                                <td>
                                                    <form action="{{ route('menu.destroy',$item->id) }}" method="POST">   
                                                        <div class="d-flex">
                                                            <a href="{{ route('menu.show',$item->id) }}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                                            <a href="{{ route('menu.edit',$item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                            @csrf
                                                            @method('DELETE')      
                                                            <a type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        
                                                    </form>

                                       
                                            
                                                </div>
												</td>												
                                            </tr>
                                            @endforeach                                                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
			
@endsection