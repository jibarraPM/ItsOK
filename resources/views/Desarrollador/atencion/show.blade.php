{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



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
                            <div class="card-header"> Recibo: ID <strong>01/01/06/2021</strong> <span class="float-right">
                                    <strong>Status:</strong> Completado</span> </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>De:</h6>
                                        <div> <strong>Nombre Local</strong> </div>
                                        <div>Id Local</div>
                                        <div>Giro</div>
                                        <div>Correo: info@webz.com.pl</div>
                                        <div>Telefono: +48 444 666 3333</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>Para:</h6>
                                        <div> <strong>Nombre Cliente</strong> </div>
                                        <div>ID Cliente</div>
                                        <div>Direccion</div>
                                        <div>Correo: marek@daniel.com</div>
                                        <div>Telefono: +48 123 456 789</div>
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
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">5698</td>
                                                <td class="left">Pizza Clasica</td>
                                                <td class="right">$9.990</td>
                                                <td class="center">1</td>
                                                <td class="right">$9.990</td>
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="left">7985</td>
                                                <td class="left">Pizza Vegetariana</td>
                                                <td class="right">$9.990</td>
                                                <td class="center">1</td>
                                                <td class="right">$9.990</td>
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td class="left">4659</td>
                                                <td class="left">Pizza Sin Gluten</td>
                                                <td class="right">$9.990</td>
                                                <td class="center">1</td>
                                                <td class="right">$9.990</td>
                                            </tr>

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
                                                    <td class="right">$29.970</td>
                                                </tr>

                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>$9.990</strong></td>
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