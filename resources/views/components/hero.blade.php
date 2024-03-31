@props(['title', 'head'])

<div class="hero-wrap hero-bread" style="background-image: url('/assets/images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Inicio</a></span> <span>{{$head}}</span></p>
                <h1 class="mb-0 bread">{{$title}}</h1>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>