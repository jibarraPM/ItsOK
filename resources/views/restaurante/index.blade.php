{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Bienvenido</h4>
                <p class="mb-0">Perfil</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Restaurante</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">

                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            @if (Auth::user()->foto == null)
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="img-fluid rounded-circle" alt="">
                            @else
                            <img src="{{ Auth::user()->foto }}" class="img-fluid rounded-circle" alt="">
                            @endif
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ Auth::user()->name." ".Auth::user()->apellido  }}</h4>
                                <p>ID: {{ Auth::user()->id }}</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                <p>{{ Auth::user()->telefono }}</p>
                            </div>
                            <div class="dropdown ml-auto">
                                <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
                                    
                                    <li class="dropdown-item"><i class="fa fa-history text-primary mr-2"></i>Editar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Locales Disponibles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID Local</th>
                                    <th>Nombre</th>
                                    <th>Giro</th>
                                    <th>ID Administrador</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['restaurants'] as $item)
                                <tr>
                                    <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->giro}}</td>
                                    <td>{{$item->rut}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->giro}}</td>
                                    <td>{{$item->rut}}</td>
                                    <td>{{$item->rut}}</td>
                         
                                    <td>
                                        <form action="{{ route('restaurante.destroy',$item->id) }}" method="POST">   
                                            <div class="d-flex">
                                               <a href="{!! url('/desarrollador/index_local'); !!}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                                <a href="{{ route('restaurante.show',$item->id) }}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-info"></i></a>
                                                <a href="{{ route('restaurante.edit',$item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                @csrf
                                                @method('DELETE')      
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                            </div>
                                            
                                        </form>

                           
                                
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

        @endsection