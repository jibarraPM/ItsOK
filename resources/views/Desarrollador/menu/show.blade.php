{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Detalle del Producto</h4>
                            <p class="mb-0">Detalle del Producto</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Producto</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Detalle</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="{{ asset('images/product/1.jpg') }}" alt="">
                                            </div>

                                        </div>

                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4>{{ $data['menu']->nombre }}</h4>
                                                <div class="star-rating mb-2">
                                                    <ul class="produtct-detail-tag">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    
                                                </div>
                                                <p class="price">${{ $data['menu']->precio }}</p>

                                                <p>ID Producto: <span class="item">{{ $data['menu']->id }}</span> </p>
                                                <p>Categorias:&nbsp;&nbsp;
                                                @foreach($data['categorias'] as $categoria)
                                                    <span class="badge badge-primary light">{{$categoria->descripcion}}</span>
                                                @endforeach
                                                </p>
                                                <p class="text-content">{{ $data['menu']->descripcion }}</p>
                                                <div class="shopping-cart mt-3">
                                                    <a class="btn btn-primary btn-lg"  href="{!! url('/desarrollador/restauranteD/'.$data['restaurante']->id.'/menuD/'.$data['menu']->id.'/edit'); !!}"><i
                                                            class="fa fa-edit-basket mr-2"></i>Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			