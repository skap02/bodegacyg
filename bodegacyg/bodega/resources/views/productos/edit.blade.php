@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR REGISTRO</h2>

<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="Codigo" name="Codigo" type="text" class="form-control" value="{{$producto->codigo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="Cantidad" name="Cantidad" type="number" class="form-control" value="{{$producto->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" step="any" value="0.00" class="form-control" value="{{$producto->precio}}">
  </div>
  <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
