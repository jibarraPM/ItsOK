{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Categoria</h4>
                <span>Agregar Categoria</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Agregar</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Categoria</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Categoria</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{ route('restaurant.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Menus Disponibles</label>
                                <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>


                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox1" required>
                                            <label class="custom-control-label" for="customCheckBox1">Checkbox 1</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="custom-control custom-checkbox mb-3 ">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheckBox2" required>
                                            <label class="custom-control-label" for="customCheckBox2">Checkbox 2</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheckBox3" required>
                                            <label class="custom-control-label" for="customCheckBox3">Checkbox 3</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheckBox4" required>
                                            <label class="custom-control-label" for="customCheckBox4">Checkbox 4</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheckBox5" required>
                                            <label class="custom-control-label" for="customCheckBox5">Checkbox 5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Agregar Categorias</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection