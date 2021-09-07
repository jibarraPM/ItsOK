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
                                    
                                        <div class="col-md-4 order-md-2 mb-4">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Tu Pedido</span>
                                                <span class="badge badge-primary badge-pill">{{($data['cantidad'])}}</span>
                                            </h4>
                                            <ul class="list-group mb-3">
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
                                                <form method="post" action="{!! url('/usuario/webpayplus/create'); !!}">
                                                @csrf
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <span>Sub Total</span>
                                                        <strong>${{$data['subTotal']}}</strong>
                                                    </li>

                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <span>Cobro por servicio</span>
                                                        <strong>${{$data['cobroPorServicio']}}</strong>
                                                    </li>

                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <span>Total (CLP)</span>
                                                        <strong>${{$data['total']}}</strong>
                                                        <input id="total" name="total" type="hidden" value="{{$data['total']}}">

                                                    </li>
                                                    <button class="btn btn-primary"  type="submit" >Pagar</button>
                                                    <hr class="mb-1">
                                                    <a class="btn btn-primary"  href="{!! url('/usuario/recibo'); !!}">Recibo</a>
                                                </form>
                                            </ul>
                                        </div>

                                    <div class="col-md-8 order-md-1">
                                        <h4 class="mb-3">Editar Pedido</h4>
                                        <form class="needs-validation" novalidate="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			