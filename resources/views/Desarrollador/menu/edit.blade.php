{{-- Extends layout --}}
@extends('layout.defaultDesarrollador')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hola, Bienvenido de nuevo!</h4>
                <span>Editar Menu</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Editar</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editar Menu</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{!! url('/desarrollador/restauranteD/'.$data['restaurante']->id.'/menuD/'.$data['menu']->id); !!}">
                            @csrf
                            @method('PUT')
                            <input id="id" name="id" type="text" value="{{$menu->id}}" hidden>
                            <div class="form-group">
                                <input id="nombre" name="nombre" type="text" class="form-control input-default " placeholder="{{$menu->nombre}}" value="{{$menu->nombre}}">
                            </div>
                            <div class="form-group">
                                <input id="descripcion" name="descripcion" type="text" class="form-control input-default" placeholder="{{$menu->descripcion}}" value="{{$menu->descripcion}}">
                            </div>
                            <div class="form-group">
                                <textarea id="ingredientes" name="ingredientes" class="form-control" rows="4" id="comment" placeholder="{{$menu->ingredientes}}" value="{{$menu->ingredientes}}"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="precio" name="precio" type="number" class="form-control input-default" placeholder="{{$menu->precio}}" value="{{$menu->precio}}">
                            </div>
                            <div class="form-group">
                                <input id="tiempoElavoracion" name="tiempoElavoracion" type="number" class="form-control input-default" placeholder="{{$menu->tiempoElavoracion}}" value="{{$menu->tiempoElavoracion}}">
                            </div>
                            <div class="input-group mb-4">
                                <div class="custom-file">
                                    <input id="foto" name="foto" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Subir Foto</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="disponible" name="disponible" type="checkbox" class="custom-control-input" checked id="customCheckBox1">
                                    <label class="custom-control-label" for="customCheckBox1">Disponible</label>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox mb-3 checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2">
                                    <label id="mayores" name="mayores" class="custom-control-label" for="customCheckBox2">Solo para mayores</label>
                                </div>
                            </div>
                            <div class="col-4">
                                    <div class="card-header">
                                        <h4 class="card-title">Categorias Local</h4>
                                    </div>
                                    <div class="row mt-3">
                                        @foreach ($data['categoriasLocal'] as $item)
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" name="categoriaslocales[]" value="{{$item->id}}"> <label>{{$item->descripcion}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-12">

                                    <div class="card-header">
                                        <h4 class="card-title">Categorias Globales</h4>
                                    </div>
                                    <div class="row mt-3">
                                        @foreach ($data['categoriasGlobal'] as $item)
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" name="categoriasGlobales[]" value="{{$item->id}}"> <label>{{$item->descripcion}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="card-header">
                                    <h4 class="card-title">Agregados Local</h4>
                                </div>
                                <div class="row mt-3">
                                    @foreach ($data['agregados'] as $item)
                                        <div class="col-4">
                                            <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" name="agregados[]" value="{{$item->id}}"> <label>{{$item->descripcion}}</label>
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