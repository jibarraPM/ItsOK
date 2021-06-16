{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <h4 class="text-center mb-4">Ingresa a tu Cuenta</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <x-label class="mb-1" for="email"> <strong>Correo</strong> </x-label>
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                            <div class="form-group">                                
                                <x-label class="mb-1" for="password"> <strong>Contraseña</strong> </x-label>
                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox ml-1">
                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                        <label class="custom-control-label" for="basic_checkbox_1">Recordar</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <x-button type="submit" class="btn btn-primary btn-block">Ingresar</x-button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>No tienes cuenta,  <a class="text-primary" href="{!! url('/register'); !!}">Registrarse</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection