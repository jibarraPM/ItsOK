{{-- Extends layout --}}
@extends('layout.defaultUser')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Productos Disponibles</h4>
                            <p class="mb-0">Productos Disponibles</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Productos</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
                        </ol>                  
                        
                                    
                    </div>

                    
                </div>
                <div class="row">
                    @foreach($data['menus'] as $item)
                    <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                        <div class="card">
                        
                            <div class="card-body">
                                <div class="new-arrival-product">
                                <a href="{{ route('menu.show', $item->id) }}">
                                <div class="new-arrivals-img-contnent">
                                    
                                    <img class="img-fluid" src="{{ asset('images/product/1.jpg') }}" alt="">
                                </div>
                                </a>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4>{{$item->getMenu->nombre}}</h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="price">${{$item->getMenu->precio}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
			
@endsection			