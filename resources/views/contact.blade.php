@extends('layouts.app-layout')

@section('title', 'FitFlavors | Contacto') 

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('login')}}">Inicio</a></span> <span>Contacto</span></p>
                    <h1 class="mb-0 bread">Se parte de nuestros Proveedores</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Dirección:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Teléfono:</span> <a href="tel://1234567920">+ 1135 2355 88</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Correo:</span> <a href="mailto:fitflavorscontacto@gmail.com">fitflavors@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Sitio Web:</span> <a href="{{route('login')}}">fitflavors.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Título">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>

            <div class="col-md-6 d-flex">
            
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29862.3709518316!2d-103.38458472089843!3d20.67786190000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1b15befe3ed%3A0xf321d1c1eb694e8a!2sVida%20saludable!5e0!3m2!1ses!2smx!4v1711755903674!5m2!1ses!2smx" style="border:0;" width="100%" class="img-fluid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </div>
        </div>
    </section>

       
        <br /> <br /> <br />
    

 @endsection