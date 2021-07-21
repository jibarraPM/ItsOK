{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Categorías del Local</h4>
                <span>Categorías Ingresadas por el local</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Categoría Local</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
            </ol>
            <div class="text-right"><a href="{!! url('/desarrollador/categoria_local/create'); !!}" class="btn btn-primary ">Agregar Categoría</a></div>
        </div>
    </div>
    <!-- row -->


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categorías del Local Disponibles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display" style="min-width: 845px">
                            <thead>
                                <tr>

                                    <th>ID Categoria</th>
                                    <th>Nombre</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data['categoriasLocal'] as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{!! url('/desarrollador/categoria_local/1/edit'); !!}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>												
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection