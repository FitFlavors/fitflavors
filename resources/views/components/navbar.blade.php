<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
    <div class="container" >
        <img src="{{ asset('assets/images/fitflavors-logo.png') }}" alt="Logo FitFlavors" style="height: auto; max-height: 50px; width: auto; max-width: 100px;" >
        <a class="navbar-brand" href="/" style="color: #DDC258;">Fit<span style="color: #599344; ">Flavors</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link" >Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comprar </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html">Bebidas</a>
                        <a class="dropdown-item" href="wishlist.html">Postres</a>
                        <a class="dropdown-item" href="product-single.html">Enlatados</a>
                        <a class="dropdown-item" href="cart.html">Cenas</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">Acerca de nosotros</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}"class="nav-link">Contactanos</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
              
    @if (Route::has('login'))
            @auth
            <li class="nav-item"> <a href="{{ url('/dashboard') }}" class="nav-link btn-success" >Dashboard</a></li>
            @else
            <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link btn-success" >Log in</a></li>

                @if (Route::has('register'))
                <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif
            @endauth
    @endif
    

            </ul>
            
        </div>
    </div>
</nav>


{{--Agregar lógica de botones de login a nav--}}

