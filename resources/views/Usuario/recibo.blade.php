{{-- Extends layout --}}
@extends('layout.defaultUser')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Detalles del Recibo</h4>
                            <p class="mb-0">Detalles del Recibo</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Recibo</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Detalle</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card mt-3">
                            <div class="card-header"> Recibo: {{$data['compra']->buy_order}} <strong>{{$data['compra']->created_at}}</strong> <span class="float-right">
                                @if ($data['compra']->status == 1)
                                    <strong>Compra:</strong> Exitosa</span> </div>
                                @else
                                    <strong>Compra:</strong> Fallida</span> </div>
                                @endif
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>De:</h6>
                                        <div> <strong>Restaurante: {{$data['restaurante']->nombre}}</strong> </div>
                                        <div>ID: {{$data['restaurante']->id}}</div>
                                        <div>Giro: {{$data['restaurante']->giro}}</div>
                                        <div>Correo: {{$data['restaurante']->correo}}</div>
                                        <div>Telefono: +{{$data['restaurante']->telefono}}</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>Para:</h6>
                                        <div> <strong>Cliente: {{$data['user']->name}}</strong> </div>
                                        <div>ID: {{$data['user']->id}}</div>
                                        <div>Direccion: {{$data['user']->direccion}}</div>
                                        <div>Correo: {{$data['user']->email}}</div>
                                        <div>Telefono: +{{$data['user']->telefono}}</div>
                                    </div>
                                    <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center" style="font-size: 0.9rem;">
                                            <div class="col-auto"> <img src="https://scontent.fscl9-1.fna.fbcdn.net/v/t1.6435-9/96774015_3630861740263670_1323190908916596736_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=973b4a&_nc_ohc=4yK83J35i1gAX_F4qCg&_nc_ht=scontent.fscl9-1.fna&oh=61028eb6f28c4a81eaba58a3084c5d62&oe=60E2C706" class="img-fluid mb-3" style="max-height: 100px;" alt=""><br>
                                                
                                            </div>
                                            <div class="col-auto"> <img src="https://apirone.com/api/v1/qr?message=bitcoin%3A1DonateWffyhwAjskoEwXt83pHZxhLTr8H%3Famount%3D0.15050000" class="img-fluid" alt="" style="max-width: 114px;"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>ID Menu</th>
                                                <th>Nombre</th>
                                                <th class="right">Costo Unitario</th>
                                                <th class="center">Cantidad</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data['carts'] as $item)
                                            <tr>
                                                <td class="center">{{$item->id}}</td>
                                                <td class="left strong">{{$item->associatedModel->id}}</td>
                                                <td class="left">{{$item->associatedModel->nombre}}</td>
                                                <td class="right">${{$item->price}}</td>
                                                <td class="center">{{$item->quantity}}</td>
                                                <td class="right">${{$item->quantity*$item->price}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">${{$data['subTotal']}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="left"><strong>Cobro por servicio</strong></td>
                                                    <td class="right">${{$data['cobroPorServicio']}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>${{$data['total']}}</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			