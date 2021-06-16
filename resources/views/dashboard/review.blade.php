{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-1">Reseñas</h2>
						<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" class="text-primary">Inicio</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Reseñas de Clientes</a></li>
                        </ol>
					</div>

				</div>
                <div class="row">
					<div class="col-md-12">
						<div class="widget-carousel owl-carousel">
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('images/dish/pic1.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Roberto Jr.</h4>
												<small class="mb-0 text-light">Head Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('images/dish/pic2.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Chicken curry special with cucumber</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">Fast, professional and friendly service, we ordered the six course tasting menu and every dish was spectacular</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Jubaedah</h4>
												<small class="mb-0 text-light">Food Vlogger</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">5.0</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('images/dish/pic3.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">JUICE</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Steve Henry</h4>
												<small class="mb-0 text-light">Internship Students</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">3.5</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('images/dish/pic4.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Willy Wonca</h4>
												<small class="mb-0 text-light">Sales Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('images/dish/pic5.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Roberto Jr.</h4>
												<small class="mb-0 text-light">Head Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xl-12 col-xxl-12">
						<div class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-1 fs-28 font-w600">Últimas Reseñas</h4>
									<p class="mb-0">Aquí está la opinión de sus clientes sobre su restaurante</p>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Glee Smiley</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.5</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Samuel Hawkins</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto">
												<span class="badge badge-rounded badge-warning light font-w500">Recomended</span> 
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Great</span>
											</li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.8</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Dicky Sitompul</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Dracule Mihawk</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">2.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Samuel Hawkins</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto">
												<span class="badge badge-rounded badge-warning light font-w500">Delcious</span> 
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Excelent</span>
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Good Services</span>
											</li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">3.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Sanji Lee</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">1.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer border-0 text-center py-4">
								<a href="javascript:void(0);" class="btn btn-primary">Ver Más <i class="fa fa-angle-double-down scale2 ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
            </div>
			
@endsection			