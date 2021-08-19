{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hola, Bienvenido de nuevo!</h4>
                            <span>Agregar Agregado</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Agregar</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Agregado</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Agregar Agregado</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " placeholder="Nombre del agregado">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" placeholder="Descripción">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control input-default" placeholder="Precio">
                                        </div>

                                        <div class="col-4">

                                            {{-- EN LA BASE DE DATOS ESTA LA VARIABLE EDAD 18, PERO NO SE VA A USAR, SI PUEDES BORRARLA MEJOR --}}
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" checked id="customCheckBox1" required>
											<label class="custom-control-label" for="customCheckBox1">Disponible</label>
										</div>
									</div>

                                    <div class="d-flex justify-content-end">
                                     <button type="submit" class="btn btn-primary">Agregar Agregado</button>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>

                </div>
            </div>
			
@endsection