@extends('layouts.app-layout')

@section('title', 'FitFlavors | Nuevo producto') 

@section('content')

    <x-hero title="Nuevo Producto" head="Productos"/>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{ route('productos.store') }}" method="POST" class="bg-white p-5 contact-form">
                @csrf
              <div class="form-group">
                <input type="text" name="producto" class="form-control" placeholder="Nombre del producto" required>
              </div>
              <div class="form-group d-flex">
                <input type="number" name="precio" class="form-control" placeholder="Precio" step="0.01" required>
                <input type="number" name="disponible" class="form-control ml-3" placeholder="Cantidad disponible" required>
              </div>
              <div class="form-group">
                <input type="text" name="proveedor" class="form-control" placeholder="Proveedor" required>
              </div>
              <div class="form-group">
                <textarea name="descripcion" id="" cols="30" rows="7" class="form-control" placeholder="Descripción del producto" required></textarea>
              </div>
              <div class="form-group">
                <textarea name="ingredientes" id="" cols="30" rows="7" class="form-control" placeholder="Ingredientes del producto" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Agregar producto" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex" style="background-image: url('/assets/images/prdct-1.jpg');">
          	<div class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
@endsection
