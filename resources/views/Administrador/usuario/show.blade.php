{{-- Extends layout --}}
@extends('layout.defaultAdministrador')



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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
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
											<p>{{ Auth::user()->id }}</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
											<p>{{ Auth::user()->telefono }}</p>
										</div>
										<div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i>Perfil</li>
												<li class="dropdown-item"><i class="fa fa-history text-primary mr-2"></i>Historial</li>
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th class="align-middle">Ticket ID</th>
                                                <th class="align-middle pr-7">Fecha</th>
                                                <th class="align-middle" style="min-width: 12.5rem;">Local</th>
												<th class="align-middle" style="min-width: 12.5rem;">Tipo de Compra</th>
                                                <th class="align-middle text-right">Estado</th>
                                                <th class="align-middle text-right">Valor</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders">
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="custom-control custom-checkbox checkbox-success">
														<input type="checkbox" class="custom-control-input" id="checkbox">
														<label class="custom-control-label" for="checkbox"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#21554</strong></a></td>
                                                <td class="py-2">20/06/2021</td>
                                                <td class="py-2"><a href="#">
                                                        <strong>#53645</strong></a> - Nombre del Local
                                                    
                                                </td>
												<td>Delivery</td>
                                                <td class="py-2 text-right"><span class="badge badge-success">Completado<span
                                                            class="ml-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-right">$25.990
                                                </td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2"><a class="dropdown-item" href="{!! url('/desarrollador/atencionD/show'); !!}"><i class="fa fa-file-text-o text-primary mr-2"></i>Detalle</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
			
@endsection			