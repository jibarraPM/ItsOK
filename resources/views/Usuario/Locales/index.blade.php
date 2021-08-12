{{-- Extends layout --}}
@extends('layout.defaultUser')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Restaurantes Disponibles</h4>
                            <p class="mb-0">Restaurantes</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Restaurantes</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                        </ol>
                        
                                    
                    </div>
                    
                </div>
                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="new-arrival-product"> 
                                <a href="{!! url('/usuario/menu'); !!}">
                                <div class="new-arrivals-img-contnent">
                                   <img class="img-fluid" src="{{ asset('images/logo-text.png') }}" alt="">
                                </div>
                                </a>                               
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Nombre Restaurante</h4>
                                        <h5>Dirección</h5>
                                        <h6>Horario</h6>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="new-arrival-product"> 
                                <a href="{!! url('/desarrollador/productos_local'); !!}">
                                <div class="new-arrivals-img-contnent">
                                   <img class="img-fluid" src="{{ asset('images/logo-text.png') }}" alt="">
                                </div>
                                </a>                               
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Nombre Restaurante</h4>
                                        <h5>Dirección</h5>
                                        <h6>Horario</h6>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="new-arrival-product"> 
                                <a href="{!! url('/desarrollador/productos_local'); !!}">
                                <div class="new-arrivals-img-contnent">
                                   <img class="img-fluid" src="{{ asset('images/logo-text.png') }}" alt="">
                                </div>
                                </a>                               
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Nombre Restaurante</h4>
                                        <h5>Dirección</h5>
                                        <h6>Horario</h6>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="new-arrival-product"> 
                                <a href="{!! url('/desarrollador/productos_local'); !!}">
                                <div class="new-arrivals-img-contnent">
                                   <img class="img-fluid" src="{{ asset('images/logo-text.png') }}" alt="">
                                </div>
                                </a>                               
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>Nombre Restaurante</h4>
                                        <h5>Dirección</h5>
                                        <h6>Horario</h6>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>

                </div>
            </div>
			
@endsection			