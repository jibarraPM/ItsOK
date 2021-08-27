{{-- Extends layout --}}
@extends('layout.defaultUser')



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
                                    <div class="col-md-6 order-md-6 mb-6">
                                        <h4 class="d-flex justify-content-between align-items-center mb-4">
                                            <span class="text-muted">Tu Pedido</span>
                                            <span class="badge badge-primary badge-pill">3</span>
                                        </h4>
                                        <ul class="list-group mb-12">
                                            @foreach ($data['carts'] as $item)
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">{{$item->name}}</h6>
                                                    <small class="text-muted">{{$item->associatedModel->descripcion}}</small> <br>
                                                    <small class="text-muted">Cantidad: {{$item->quantity}}</small>
                                                    <a href="{!! url('/desarrollador/atencionD/show'); !!}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{!! url('/desarrollador/atencionD/show'); !!}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <span class="text-muted">${{$item->price}}</span>
                                            </li>
                                            @endforeach
                                            
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Sub Total</span>
                                                <strong>$29.970</strong>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Cobro por servicio</span>
                                                <strong>$1.499</strong>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total (CLP)</span>
                                                <strong>$31.469</strong>
                                            </li>
                                            <a class="btn btn-primary"  href="https://www.transbankdevelopers.cl/">Pagar</a>
                                            <hr class="mb-1">
                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			