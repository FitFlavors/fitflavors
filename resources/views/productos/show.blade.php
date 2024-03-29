@extends('layouts.app-layout')

@section('title', 'FitFlavors | ' . $producto->producto) 

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg'); background-color: #ddc258;">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Inicio</a></span> <span class="mr-2"><a href="/productos">Productos</a></span> <span>{{$producto->producto}}</span></p>
                    <h1 class="mb-0 bread">{{$producto->producto}}</h1>
                    <div class="d-flex align-items-center justify-content-center">
                        <p><a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar producto</a></p> 
                        <form action="{{route('productos.destroy', $producto)}}" method=POST>
                            @csrf
                            @method('DELETE')
                            <p><button type="submit" class="btn btn-primary ml-3 mt-3">Eliminar producto</button></p> 
                        </form>
                    </div>
                </div>
          </div>
        </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="assets/images/prdct-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$producto->producto}}</h3>
    				<p>{{$producto->proveedor}}</p>
    				<div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
    				<p class="price"><span>${{ number_format($producto->precio, 2) }}</span></p>
    				<p>{{$producto->descripcion}}</p>
                    <div class="row mt-4">
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p style="color: #000;">{{$producto->disponible}} disponible en stock</p>
                        </div>
                    </div>
                    <p><a href="cart.html" class="btn btn-black py-3 px-5">Añadir al carrito</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    
@endsection

<script>
    $(document).ready(function(){

    var quantitiy=0;
        $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

                
                // Increment
            
        });

            $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
            
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
</script>