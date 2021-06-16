{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-0">Análisis</h2>
						<p class="mb-0">Información general del Restaurante</p>
					</div>
					

				</div>
                <div class="row">
					<div class="col-xl-12 col-xxl-12 col-lg-12 col-lg-12 col-md-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0 d-sm-flex d-block">
										<div>
											<h4 class="card-title mb-1">Gráfico de Ventas</h4>
											<small class="mb-0">Resumen de ventas</small>
										</div>

									</div>
									<div class="card-body revenue-chart px-3">
											<div class="d-flex align-items-end pl-3">
												<div class="mr-4">
													<h3 class="font-w600 mb-0"><img src="{{ asset('images/svg/ic_stat3.svg') }}" height="22" width="22" class="mr-2 mb-1" alt=""/>
														<span class="counter">257</span>k
													</h3>
													<small class="text-dark fs-14">Total Mensual</small>
												</div>
												<div class="mr-4">
													<h3 class="font-w600 mb-0"><img src="{{ asset('images/svg/ic_stat3.svg') }}" height="22" width="22" class="mr-2 mb-1" alt=""/><span class="counter">1,245</span></h3>
													<small class="text-dark fs-14">Total Semanal</small>
												</div>
												<div class="mr-4">
													<h3 class="font-w600 mb-0"><img src="{{ asset('images/svg/ic_stat3.svg') }}" height="22" width="22" class="mr-2 mb-1" alt=""/><span class="counter">1,245</span></h3>
													<small class="text-dark fs-14">Total Diario</small>
												</div>
											</div>
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xl-12 col-xxl-12 col-lg-12  col-lg-12 col-md-12">
						<div class="row">

							<div class="col-xl-6">
								<div class="card">
									<div class="card-header border-0 pb-0 d-sm-flex d-block">
										<div>
											<h4 class="card-title mb-1">Menús más vendidos</h4>
											<small class="mb-0">Menús más comprados en la aplicación</small>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
														Mensual
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
														Semanal
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#today" role="tab">
														Hoy
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content">
										<div class="tab-pane fade show active" id="monthly">
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic5.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> BURGER</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$12.56</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic4.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Pizza Meal for Kids (Small size)</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> PIZZA</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$5.67</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic3.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Medium Spicy Pizza with Kemangi Leaf</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> JUICE</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$11.21</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic2.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> PIZZA</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$8.15</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic1.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Watermelon juice with ice</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$5.67</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="weekly">
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic3.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Pizza Meal for Kids (Small size)</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$11.21</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic2.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$8.15</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic1.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> JUICE</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$5.67</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="today">
											<div class="media mb-4 items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic2.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> JUICE</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$8.15</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="media items-list-2">
												<a href="{!! url('/ecom-product-detail'); !!}"><img class="img-fluid rounded mr-3" width="85" src="{{ asset('images/dish/pic1.jpg') }}" alt="DexignZone"></a>
												<div class="media-body col-6 px-0">
													<h5 class="mt-0 mb-1"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Watermelon juice with ice</a></h5>
													<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
													<span class="text-secondary mr-2 fo"></span>
													<ul class="fs-14 list-inline">
														<li class="mr-3">Serves for 4 Person</li>
														<li>24mins</li>
													</ul>
												</div>
												<div class="media-footer align-self-center ml-auto d-block align-items-center d-sm-flex">
													<h3	class="mb-0 font-w600 text-secondary">$5.67</h3>
													<div class="dropdown ml-3 ">
														<button type="button" class="btn btn-secondary sharp tp-btn-light " data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-0 text-center">
										<a href="javascript:void(0);" class="btn-link">View more <i class="fa fa-angle-down ml-2 scale-2"></i></a>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header border-0 pb-0 d-sm-flex d-block">
										<div>
											<h4 class="card-title mb-1">Menús Favoritos</h4>
											<small class="mb-0">Menús con mejor calificación</small>
										</div>
										<div class="card-action card-tabs">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#monthly1" role="tab">Mensual</a></li>
												<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#weekly1" role="tab">Semanal</a></li>
												<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#today1" role="tab">Hoy</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content pb-0">
										<div class="tab-pane fade show active" id="monthly1">
											<div class="row">
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic5.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic4.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Pizza Meal for Kids (Small size)</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic3.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic2.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Medium Spicy Pizza with Kemangi Leaf</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic1.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic5.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="weekly1">
											<div class="row">
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic5.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic4.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Pizza Meal for Kids (Small size)</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic3.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic2.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="today1">
											<div class="row">
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic4.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
												<div class="col-md-4 col-xl-4 col-xxl-6 col-sm-6 mb-5">
													<div class="media mb-4">
														<a href="{!! url('/ecom-product-detail'); !!}"><img src="{{ asset('images/dish/pic2.jpg') }}" style="width:100%;" class="rounded" alt=""/></a>
													</div>
													<div class="info">
														<h5 class="text-black mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Medium Spicy Pizza with Kemangi Leaf</a></h5>
														<div class="star-review fs-14 mb-3">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">451 reviews</span>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary light btn-sm btn-rounded px-4"><i class="fa fa-heart-o mr-2 scale5 "></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-0 text-center">
										<a href="javascript:void(0);" class="btn-link">Ver Más <i class="fa fa-angle-down ml-2 scale-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				 </div>
            </div>
			
@endsection			