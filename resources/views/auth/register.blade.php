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
                    <div>
                        <img src="{{ asset('assets/images/1.png') }}" class="img-fluid">
                        <div class="text-center" style="margin-bottom:10px;"><a href="{{ route('login') }}">
                            {{ __('¿Ya tienes una cuenta?') }}
                        </a></div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">

                    <form method="POST" action="{{ route('register') }}" class="bg-white p-5 contact-form">
                        @csrf
                        <h1>Regístrate</h1> {{--Poner logo de navbar--}}
                        <div class="form-group">
                            <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="username" placeholder="Correo Electrónico">
                        </div>                     
                        <div class="form-group">
                            <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password" placeholder="Contraseña">
                        </div>                        
                        <div class="form-group">
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                        </div>                      
                        <div class="form-group text-center" style="margin-top:50px;" >
                            <input type="submit" value="Continuar" class="btn btn-primary py-3 px-5" >
                        </div>
                        <x-validation-errors class="mb-4" />
                    </form>

                </div>
            </div>
        </div>
    </section>
 
 @endsection


