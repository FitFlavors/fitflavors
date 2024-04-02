<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">    
        <link rel="stylesheet" href="{{ asset('/assets/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/jquery.timepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    </head>

    <body class="goto-here">

        @include('components.navbar')

        @yield('content') {{--Aquí se va a insertar el contenido de la vista--}}

        @include('components.footer')
       
        {{-- loader --}}
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/assets/js/aos.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('/assets/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('/assets/js/google-map.js') }}"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>
    
    </body>

    <script>
        $(document).ready(function(){
    
            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e){
                
                // Detener el comportamiento por defecto de un botón
                e.preventDefault();
                // Obtener el valor actual del campo de cantidad
                var quantity = parseInt($('#quantity').val());
                
                // Si no es indefinido
                if (!isNaN(quantity)){
                    // Incrementar el valor
                    $('#quantity').val(quantity + 1);
                }
            });
    
            $('.quantity-left-minus').click(function(e){
                // Detener el comportamiento por defecto de un botón
                e.preventDefault();
                // Obtener el valor actual del campo de cantidad
                var quantity = parseInt($('#quantity').val());
                
                // Si no es indefinido y es mayor que cero
                if (!isNaN(quantity) && quantity > 0){
                    // Decrementar el valor
                    $('#quantity').val(quantity - 1);
                }
            });
    
            var toggleButton = document.getElementById("toggleButton");
            var contenido = document.getElementById("contenido");
    
            toggleButton.addEventListener("click", function() {
                if (contenido.style.maxHeight) {
                    // Si el contenido está visible, ocultarlo
                    contenido.style.maxHeight = null;
                    contenido.classList.remove("contenido-border");
                    toggleButton.textContent = "Ver ingredientes";
                    toggleButton.classList.remove("mostrar"); // Quita una clase de estilo
                    toggleButton.classList.add("btn-ingredientes")
                } else {
                    // Si el contenido está oculto, mostrarlo
                    contenido.style.display = "block";
                    contenido.style.maxHeight = contenido.scrollHeight + "px"; // Establecer la altura máxima como la altura real del contenido
                    contenido.classList.add("contenido-border");
                    toggleButton.textContent = "Ocultar ingredientes";
                    toggleButton.classList.add("mostrar"); 
                    toggleButton.classList.remove("btn-ingredientes")
                }
            });
            
        });
    </script>    

</html>