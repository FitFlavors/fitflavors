@extends('layouts.app-layout')

@section('title', 'FitFlavors | Editar ' . $producto->producto) 

@section('content')

    <x-hero title="Editar {{$producto->producto}}" head="{{$producto->producto}}"/>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{route('productos.update', $producto)}}" method="POST" class="bg-white p-5 contact-form">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <input type="text" name="producto" class="form-control" placeholder="Nombre del producto" value="{{$producto->producto}}" required>
              </div>
              <div class="form-group d-flex">
                <input type="number" name="precio" class="form-control" placeholder="Precio" step="0.01" value="{{$producto->precio}}" required>
                <input type="number" name="disponible" class="form-control ml-3" placeholder="Cantidad disponible" value="{{$producto->disponible}}" required>
              </div>
              <div class="form-group">
                <input type="text" name="proveedor" class="form-control" value="{{$producto->proveedor}}" placeholder="Proveedor" required>
              </div>
              <div class="form-group">
                <textarea name="descripcion" id="" cols="30" rows="7" class="form-control" placeholder="Descripción del producto" required>{{$producto->descripcion}}</textarea>
              </div>
              <div class="form-group">
                <textarea name="ingredientes" id="" cols="30" rows="7" class="form-control" placeholder="Ingredientes del producto" required>{{$producto->ingredientes}}</textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Guardar producto" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex" style="background-color: #ddc258">
          	<div class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
@endsection
