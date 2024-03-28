
@extends('layouts.app-layout')

@section('title', 'FitFlavors | Iniciar sesión') 

@section('content')

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info"></div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">

                    <form method="POST" action="{{ route('login') }}" class="bg-white p-5 contact-form">
                        @csrf
                        <h1>Iniciar Sesión</h1> {{--Poner logo de navbar--}}
                        <div class="form-group">
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Correo Electrónico">
                        </div>
                        <div class="form-group">
                            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"  placeholder="Contraseña" />
                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember"/>
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="text-center"><a href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a></div>
                        @endif
                        <div class="form-group text-center" style="margin-top:50px;">
                            <input type="submit" value="Continuar" class="btn btn-primary py-3 px-5">
                        </div>
                        <x-validation-errors class="mb-4" />
                    </form>

                </div>
                <div class="col-md-6 d-flex">
                    <div>
                        <img src="{{ asset('assets/images/2.png') }}" class="img-fluid">
                        <div class="text-center"><a href="{{ route('register') }}">
                            {{ __('¿No tienes una cuenta?') }}
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 @endsection

