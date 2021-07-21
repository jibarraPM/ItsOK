{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hola, Bienvenido de nuevo!</h4>
                <span>Agregar Menu</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Agregar</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Menu</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{ route('restaurant.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control input-default " placeholder="Nombre del Menu">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" placeholder="Descripción">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" id="comment" placeholder="Ingresar Ingredientes:"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control input-default" placeholder="Precio">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control input-default" placeholder="Tiempo Estimado de Elaboración">
                            </div>
                            <div class="input-group mb-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Subir Foto</label>

                                </div>

                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" checked id="customCheckBox1" required>
                                    <label class="custom-control-label" for="customCheckBox1">Disponible</label>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox mb-3 checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2" required>
                                    <label class="custom-control-label" for="customCheckBox2">Solo para mayores</label>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Categorias Local</h4>
                            </div>
                            <div class="row mt-3">
                                @foreach ($data['categoriasLocal'] as $item)
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox3">
                                        <label class="custom-control-label" for="customCheckBox3">{{$item->descricion}}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="card-header">
                                <h4 class="card-title">Categorias Globales</h4>
                            </div>
                            <div class="row mt-3">
                                @foreach ($data['categoriasGlobal'] as $item)
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox3">
                                        <label class="custom-control-label" for="customCheckBox3">{{$item->descricion}}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="card-header">
                                <h4 class="card-title">Agregados Local</h4>
                            </div>
                            <div class="row mt-3">
                                @foreach ($data['agregados'] as $item)
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox3">
                                        <label class="custom-control-label" for="customCheckBox3">{{$item->nombre}}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-primary">Agregar Menu</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection