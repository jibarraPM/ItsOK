{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
	<div class="col-md-6">
      <div class="authincation-content">
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="auth-form">
                      <h4 class="text-center mb-4">Ingresa a tu Cuenta</h4>
                      <form action="{!! url('/index'); !!}">
                          <div class="form-group">
                              <label class="mb-1"><strong>Correo</strong></label>
                              <input type="email" class="form-control" value="Hola@ejemplo.com">
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Contraseña</strong></label>
                              <input type="password" class="form-control" value="Password">
                          </div>
                          <div class="form-row d-flex justify-content-between mt-4 mb-2">
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox ml-1">
            <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
            <label class="custom-control-label" for="basic_checkbox_1">Recordar</label>
          </div>
                              </div>
                              <div class="form-group">
                                  <a href="{!! url('/page-forgot-password'); !!}">Recuperar contraseña</a>
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                          </div>
                      </form>
                      <div class="new-account mt-3">
                          <p>No tienes cuenta,  <a class="text-primary" href="{!! url('/page-register'); !!}">Registrarse</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection