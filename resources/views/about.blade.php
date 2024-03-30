@extends('layouts.app-layout')

@section('title', 'FitFlavors | Inicio') 

@section('content')
    
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('welcome') }}">Inicio</a></span> <span>Sobre Nosotros</span></p>
                    <h1 class="mb-0 bread">Sobre Nosotros</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/about.jpg);">
                    <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Bienvenido a FitFlavors, una tienda saludable en la palma de tus manos.</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>En FitFlavors, nos dedicamos a ofrecerte opciones deliciosas y saludables para tu bienestar. Con productos cuidadosamente seleccionados y una variedad de opciones adaptadas a diferentes estilos de
                            vida, estamos aquí para apoyarte en tu viaje hacia una vida más saludable. </p>
                        <p>                        ¡Únete a nosotros y descubre una nueva forma de comer bien, sentirte bien y vivir bien!                        </p>
                        <p><a href="#" class="btn btn-primary">Comprar ahora</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Suscríbete a nuestro Blog!</h2>
                    <span>Recibe correos de nuestras novedades y ofertas especiales</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Escribe tu correo electrónico">
                            <input type="submit" value="Suscribirse" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
      
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/assets/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="110283">0</strong>
                                    <span>Clientes Felices</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="35">0</strong>
                                    <span>Sucursales</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1018">0</strong>
                                    <span>Socios</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="28">0</strong>
                                    <span>Premios</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimonios</span>
                    <h2 class="mb-4">Nuestros clientes dicen:</h2>
                    <p>Descubre cómo FitFlavors ha transformado la vida de nuestros clientes con sus opciones saludables y deliciosas. Aquí te presentamos algunas de las experiencias que han compartido con nosotros:</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(assets/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">¡Los productos de FitFlavors han transformado mi dieta! Son deliciosos y me han ayudado a mantenerme en forma sin sacrificar el sabor. ¡Gracias por dar opciones saludables!</p>
                                    <p class="name">Mateo García</p>
                                    <span class="position">Entrenador de Fútbol</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(assets/images/person_6.png)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">¡FitFlavors ha sido un descubrimiento increíble! Sus opciones saludables y variadas han hecho que comer bien sea más fácil que nunca. ¡Lo recomiendo totalmente!</p>
                                    <p class="name">Sebastián Rivera</p>
                                    <span class="position">Ingeniero Biomédico</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(assets/images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Desde que descubrí FitFlavors, mi alimentación ha dado un giro de 180 grados. Sus opciones saludables y convenientes son perfectas para mi estilo de vida ocupado. ¡Gracias por hacer que comer bien sea tan fácil!</p>
                                    <p class="name">Juan López</p>
                                    <span class="position">Profesor de Secundaria</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(assets/images/person_4.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">¡FitFlavors es mi salvación cuando tengo antojos de comida rápida! Sus batidos son deliciosos y me dan la energía que necesito para todo el día. ¡No puedo imaginar mi vida sin ellos!</p>
                                    <p class="name">Carlos Castillo</p>
                                    <span class="position">Estudiante Universitario</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(assets/images/person_5.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Como deportista, siempre estoy buscando opciones nutritivas para alimentar mi cuerpo. FitFlavors ha sido un hallazgo increíble; sus comidas me proporcionan la energía que necesito para rendir!</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Atleta Profesional</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Entregas gratis</h3>
                            <span>En órdenes superiores a $600</span>
                        </div>
                    </div>      
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Siempre Fresco</h3>
                            <span>Del campo a tus manos</span>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Calidad Superior</h3>
                            <span>Productos seleccionados</span>
                        </div>
                    </div>      
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Servicio al cliente</h3>
                            <span>24/7</span>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </section>

 @endsection