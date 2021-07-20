{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Interfaz para Agregar Nueva Categoría Global</h4>
                <span>Agregar Categoría Local</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Agregar</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Categoría</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Categoría</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control input-default " placeholder="Nombre de la Categoría">
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Agregar Categoría</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection