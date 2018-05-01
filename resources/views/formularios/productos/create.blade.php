@extends('template.base')

@section('title','crear producto')
	

@section('content-yield')
	<form action="/admin/productos" method="POST" role="form">
		{{csrf_field()}}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa el nombre del producto">
  </div>

  <div class="form-group">
    <label for="marca">Marca</label>
    <input name="marca" type="text" class="form-control" id="marca" placeholder="Ingresa la marca del producto">
  </div>

  <div class="form-group">
    <label for="precio">Precio</label>
    <input name="precio" type="text" class="form-control" id="precio"  placeholder="Ingresa el precio">
  </div>

  <div class="form-group">
    <label for="stock">Stock</label>
    <input name="stock" type="text" class="form-control" id="stock" aria-describedby="emailHelp" placeholder="Ingresa el stock">
  </div>

  <div class="form-group">
    <label for="categoria_id">Categoria_id</label>
    <input name="categoria_id" type="text" class="form-control" id="categoria_id" aria-describedby="emailHelp" placeholder="Ingresa categoria_id">
  </div>
  
  <div class="form-group">
    <label for="seccion_id">Seccion_id</label>
    <input name="seccion_id" type="text" class="form-control" id="seccion_id"  placeholder="Ingresa seccion_id">
  </div>

  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresa descripcion">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
	<br>
	<!--tabla-->
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">marca</th>
      <th scope="col">precio</th>
      <th scope="col">stock</th>
      <th scope="col">categoria</th>
      <th scope="col">seccion</th>
      <th scope="col">descripcion</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($productos as $producto)
    <tr>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->marca }}</td>
      <td>{{ $producto->precio }}</td>
      <td>{{ $producto->stock }}</td>
      <td>{{ $producto->categoria }}</td>
      <td>{{ $producto->seccion }}</td>
      <td>{{ $producto->Descripcion }}</td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection