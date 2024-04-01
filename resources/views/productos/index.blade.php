@extends('layouts.app-layout')

@section('title', 'FitFlavors | Productos') 

@section('content')
	<x-hero title="Productos" head="Productos">
		@auth
			@if(auth()->user()->id == 1)
				<p><a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar producto</a></p>
			@endif
		@endauth
	</x-hero>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">Todo</a></li>
    					<li><a href="#">Vegetales</a></li>
    					<li><a href="#">Frutas</a></li>
    					<li><a href="#">Jugos</a></li>
    					<li><a href="#">Deshidratado</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
				@foreach($productos as $producto)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="{{route('productos.show', $producto->id)}}" class="img-prod"><img class="img-fluid" src="assets/images/prdct-1.jpg" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="{{route('productos.show', $producto->id)}}">{{$producto->producto}}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>${{ number_format($producto->precio, 2) }}</span></p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										{{--Hacer que estos dos solo le aparezcan al administrador--}}
										@auth
											@if(auth()->user()->id == 1)
												<a href="{{route('productos.edit', $producto->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center mr-1">
													<span><i class="ion-ios-create"></i></span>
												</a>
												<form action="{{route('productos.destroy', $producto)}}" method=POST>
													@csrf
													@method('DELETE')
													<button type="submit" class="add-to-cart d-flex justify-content-center align-items-center text-center btn-trash">
														<span><i class="ion-ios-trash"></i></span>
													</button>
												</form>
											@else
												<a href="#" class="buy-now d-flex justify-content-center align-items-center mr-1" style="background-color: #ddc258">
													<span><i class="ion-ios-cart"></i></span>
												</a>
												<a href="#" class="heart d-flex justify-content-center align-items-center" style="background-color: #ddc258">
													<span><i class="ion-ios-heart"></i></span>
												</a>
											@endif
										@endauth
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
    		</div>
    		<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
        	</div>
    	</div>
    </section>
@endsection