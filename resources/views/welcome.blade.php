@extends('layouts.app-layout')

@section('title', 'FitFlavors | Inicio') 

@section('content')

{{-- CARRUSEL DE IMAGENES CARRUSEL DE IMAGENES --}}
    <section id="home-section" class="hero">

		  <div class="home-slider owl-carousel">

		  <div class="slider-item" style="background-image: url(assets/images/persona-canasta.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Apoyamos proveedores locales</h1>
	              <h2 class="subheading mb-4">Cada producto es elaborado y cultivado por vendedores locales</h2>
	              <p><a href="#PROVEEDORES" class="btn btn-primary">Ver proveedores</a></p>

	            </div>
		
	          </div>
	        </div>
	      </div>





	      <div class="slider-item" style="background-image: url(assets/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2 ">Productos nutritivos &amp; orgánicos esperan por ti.</h1>
	              <h2 class="subheading mb-4">Delicioso y económicos.</h2>
	              <p><a href="#PRODUCTOS" class="btn btn-primary">Ver productos</a></p>
	            </div>

	          </div>
	        </div>
	      </div>



		  <div class="slider-item" style="background-image: url(assets/images/comiendo-mujer.jpeg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2 ">Información nutricional de los productos</h1>
	              <h2 class="subheading mb-4">¿Buscas información precisa y verificada? Esta es tu tienda</h2>
	              <p><a href="#PRODUCTOS" class="btn btn-primary">Ver productos</a></p>

	            </div>
		
	          </div>
	        </div>
	      </div>


	      <div class="slider-item" style="background-image: url(assets/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2 ">Diferentes categorías &amp; para todos los gustos</h1>
	              <h2 class="subheading mb-4">¿Cereales, postres, productos veganos? Prueba ya  </h2>
	              <p><a href="#CATEGORÍAS" class="btn btn-primary">Ver categorías</a></p>

	            </div>
		
	          </div>
	        </div>
	      </div>

	

		  
	    </div>
    </section>


	{{-- EL MEJOR PRODUCTO PARA TI SECCIÓN --}}
	<section class="ftco-section img" style="background-image: url(assets/images/bg_3.jpg);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">"De la red hasta tu mesa, nutrición que no pesa"</span>
            <h2 class="mb-4">FITFLAVORS</h2>
            <p>Fitflavors es una empresa dedicada al bienestar, la salud y la búsqueda de proveedores locales
				para que tus hábitos alimenticios sean mejores y tu economía igual. En esta tienda de productos naturales
				podrás encontrar calidad, variedad e información nutricional que puede ayudarte a conocer 
				los productos que consumes. 
			</p>
            <h3><a href="#">¡Descubre los productos que te esperan!</a></h3>
           
          </div>
        </div>   		
    	</div>
    </section>




	{{-- CÍRCULOS CÍRCULOS CÍRCULOS  --}}
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Entregas rápidas</h3>
                <span>Solo envíos en la zona metropolitana de Guadalajara</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Productos previamente seleccionados</h3>
                <span>Verificamos siempre la calidad</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Apoyando proveedores locales</h3>
                <span>Siempre manteniendo un control de calidad</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Comunicación constante</h3>
                <span>¿Dudas? Estamos 24/7 atentos a lo que necesitas </span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>



		{{--CATEGORÍAS CATEGORÍAS --}}
		<section id="CATEGORIAS" class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(assets/images/category.jpg);">
									<div class="text text-center">
										<h2>Variadas categorías</h2>
										<p>Cuida la salud de los tuyos seleccionando tus productos favoritos. Ofrecemos distintas 
											categorías que pueden ayudarte a elegir lo que más necesitas.  </p>
										<p><a href="#" class="btn btn-primary">Ver más categorías</a></p>
										{{--DEBE LLEVAR A CATEGORÍAS--}}
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/vegano-producto.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Productos veganos y vegetarianos</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/frutas-vegetales.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Frutas y vegetales</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/bebidas-nutritivas.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Bebidas</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/postres-fruta.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Postres</a></h2>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>


	{{--PRODUCTOS PRODUCTOS PRODUCTOS --}}
    <section id="PRODUCTOS" class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">FitFlavors</span>
            <h2 class="mb-4">Productos disponibles</h2>
            <p>Productos de vendedores locales a la venta, encuentra su información nutricional, 
				cantidad en stock y calificación del producto ¡Solo aquí en FitFlavors! (MX)
			</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product" >
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/barritas-nutritivas.png" alt="Colorlib Template">
    						<span class="status">Favorito del mes</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center title-prod">
    						<h3><a class="title-prod" href="#">Barritas nutritivas de chocolate amargo</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$80.00</span><span class="price-sale">$40.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Caja de fresas</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$50.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/mermelada-variedad.png" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Variedad en mermelada</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$60.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Col morada</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$30.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/tortilla-nopal.jpg" alt="Colorlib Template">
    						<span class="status">Favorito del mes</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tortillas de nopal</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$90.00</span><span class="price-sale">$50.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/jitomate-1.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Caja de jitomates</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$90.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/pan-centeno.png" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Pan de centeno orgánico</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$100.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="assets/images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Jugos naturales</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$35.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		

	{{-- EL MEJOR PRODUCTO PARA TI SECCIÓN --}}
		<section class="ftco-section img" style="background-image: url(assets/images/bg-9.png);">
    	<div class="container">
				<div class="row justify-content-end">
				<div class="col-md-6 order-md-last align-items-stretch d-flex" style="background-image: url(assets/images/category-4.jpg);">
									<div class="text px-3 py-1">
									</div>
								</div>
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">

          	<span class="subheading">Los mejores precios para ti</span>
            <h2 class="mb-4">Promociones cada día ¡Rápido que se van!</h2>
            <p>Descubre nuestras próximas promociones en cereales y semillas en stock ¡Queremos que te lleves todo!</p>
            <h3><a href="#">Bolsas de cereal seleccionado (100 g)</a></h3>
            <span class="price">$150 <a href="#">ahora solo $60 (MX)</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						  
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
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

       
        <br /> <br /> <br />
    

 @endsection