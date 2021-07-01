{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Detalles del pedido</h4>
                            <p class="mb-0">Detalles del pedido</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pedido</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Detalle</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 order-md-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">Tu Pedido</span>
                                            <span class="badge badge-primary badge-pill">3</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6>
                                                    <small class="text-muted">Ingredientes</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6>
                                                    <small class="text-muted">Ingrediente</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Producto</h6>
                                                    <small class="text-muted">Ingredientes</small>
                                                </div>
                                                <span class="text-muted">$9.990</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total (CLP)</span>
                                                <strong>$29.970</strong>
                                            </li>
                                            <a class="btn btn-primary"  href="">Pagar</a>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 order-md-1">
                                        <h4 class="mb-3">Editar Pedido</h4>
                                        <form class="needs-validation" novalidate="">

                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email"  min="0" value="1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email" min="0" value="1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="producto">Producto</label>
                                                <input type="number" class="form-control" id="email"  min="0" value="1">
                                            </div>


                                            <hr class="mb-4">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="same-address">
                                                <label class="custom-control-label" for="same-address">Shipping address
                                                    is
                                                    the same as
                                                    my billing address</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="save-info">
                                                <label class="custom-control-label" for="save-info">Save this
                                                    information
                                                    for next
                                                    time</label>
                                            </div>
                                            <hr class="mb-4">

                                            <h4 class="mb-3">Payment</h4>

                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio mb-2">
                                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                                    <label class="custom-control-label" for="credit">Credit card</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                    <label class="custom-control-label" for="debit">Debit card</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Name on card</label>
                                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                    <small class="text-muted">Full name as displayed on card</small>
                                                    <div class="invalid-feedback">
                                                        Name on card is required
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Credit card number</label>
                                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Credit card number is required
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="cc-expiration">Expiration</label>
                                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Expiration date required
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="cc-expiration">CVV</label>
                                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Security code required
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mb-4">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                                checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection			