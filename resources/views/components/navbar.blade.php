<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <img src="{{ asset('assets/images/fitflavors-logo.png') }}" alt="Logo FitFlavors" >
        <a class="navbar-brand" href="/" style="color: #DDC258;">Fit<span style="color: #599344; ">Flavors</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('productos.index') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Bebidas</a>
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Postres</a>
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Enlatados</a>
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Cenas</a>
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Desayunos</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">Acerca de nosotros</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}"class="nav-link">Contactanos</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

                <div class="d-flex navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">Mi Perfil</a>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item align-middle"> <a href="{{ route('login') }}" class="nav-link btn-navbar btn primary p-2 m-2" style="background-color: transparent;">Ingresar</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item align-middle"> <a href="{{ route('register') }}" class="nav-link btn-navbar btn p-2 m-2">Registrar</a></li>
                            @endif
                        @endauth
                    @endif
                </div>

            </ul>
        </div>
    </div>
</nav>

