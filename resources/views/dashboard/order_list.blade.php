{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-0">Ordenes</h2>
						<p class="mb-0">Lista de ordenes del Local</p>
					</div>

				</div>
                <div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example-5" class="display mb-4 dataTablesCard" style="min-width: 845px;">
								<thead>
									<tr>
										<th>Orden ID</th>
										<th>Fecha</th>
										<th>Cliente</th>
										<th>Nota</th>
										<th>Total</th>
										<th>Estado</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#5552351</td>
										<td>12 Junio 2021, 12:42 AM</td>
										<td>Javier Ibarra</td>
										<td>Sin Nota</td>
										<td>$25.990</td>
										<td><span class="btn btn-sm light btn-success fs-16">Completado</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="las la-check-square scale5 text-primary mr-2"></i> Detalles</a>
													
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
			
@endsection			