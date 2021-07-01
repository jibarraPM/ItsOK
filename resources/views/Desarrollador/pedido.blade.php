{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Detalles del pedido</h4>
                            <p class="mb-0">Detalles del pedido</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pedido</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Detalle</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 order-md-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">Tu Pedido</span>
                                            <span class="badge badge-primary badge-pill">3</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6>
                                                    <small class="text-muted">Ingredientes</small> <br>
                                                    <small class="text-muted">Cantidad: 1</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6>
                                                    <small class="text-muted">Ingrediente</small> <br>
                                                    <small class="text-muted">Cantidad: 1</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6> 
                                                    <small class="text-muted">Ingredientes</small> <br>
                                                    <small class="text-muted">Cantidad: 1</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total (CLP)</span>
                                                <strong>$29.970</strong>
                                            </li>
                                            <a class="btn btn-primary"  href="https://www.transbankdevelopers.cl/">Pagar</a>
                                            <hr class="mb-1">
                                            <a class="btn btn-primary"  href="{!! url('/desarrollador/recibo'); !!}">Recibo</a>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 order-md-1">
                                        <h4 class="mb-3">Editar Pedido</h4>
                                        <form class="needs-validation" novalidate="">

                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email"  min="0" value="1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email" min="0" value="1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email"  min="0" value="1">
                                            </div>

                                            <hr class="mb-4">
                                            <a class="btn btn-primary"  href="#">Actualizar Pedido</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			