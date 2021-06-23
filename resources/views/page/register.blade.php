{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
	<div class="col-md-6">
      <div class="authincation-content">
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="auth-form">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                      <h4 class="text-center mb-4">Sign up your account</h4>
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                              <x-label class="mb-1" for="name" :value="__('Name')"><strong>Nombre</strong></x-label>
                              <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="Pablo"/>
                          </div>
                          <div class="form-group">
                            <x-label for="apellido" :value="__('Apellido')" class="mb-1"><strong>Apellido</strong></x-label>
                            <x-input id="apellido" type="text" class="form-control" name="apellido" placeholder="Diaz"  required />
                            </div>
                            <div class="form-group">
                                <x-label for="apodo" :value="__('Apodo')" class="mb-1"><strong>Apodo</strong></x-label>
                                <x-input id="apodo" type="text" class="form-control" name="apodo" placeholder="Gran jefe"  required />
                            </div>
                            <div class="form-group">
                                <x-label for="nacimiento" :value="__('Nacimiento')" class="mb-1"><strong>Nacimiento</strong></x-label>
                                <x-input id="nacimiento" type="date" class="form-control" name="nacimiento" required />
                            </div>
                            <div class="form-group">
                                <x-label for="telefono" :value="__('Telefono')" class="mb-1"><strong>Telefono</strong></x-label>
                                <x-input id="telefono" type="string" class="form-control" name="telefono" placeholder="+56987654321" required />
                            </div>
                          <div class="form-group">
                              <x-label for="email" :value="__('Email')" class="mb-1"><strong>Email</strong></x-label>
                              <x-input id="email" type="email" class="form-control" placeholder="hello@example.com" name="email" :value="old('email')" required />
                          </div>
                          <div class="form-group">
                            <x-label class="mb-1" for="password" :value="__('Password')" ><strong>Password</strong></x-label>
                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            value="Password"
                                            required autocomplete="new-password" />
                            </div>
                      
                          <div class="form-group">
                            <x-label class="mb-1" for="password_confirmation" :value="__('Confirm Password')" ><strong>Password Confirmation</strong></x-label>
                                <x-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation"
                                                value="Password"
                                                required />
                        </div>
                          
                          <div class="text-center mt-4">
                              <x-button class="btn btn-primary btn-block">{{ __('Register') }}</x-button>
                          </div>
                      </form>
                      <div class="new-account mt-3">
                          <p>Already have an account? <a class="text-primary" href="{!! url('/page-login'); !!}">Sign in</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection