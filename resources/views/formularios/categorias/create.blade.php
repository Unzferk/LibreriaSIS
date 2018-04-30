@extends('template.base')

@section('title','crear categoria')
	

@section('content-yield')
	<form action="/admin/categorias" method="POST" role="form">
		{{csrf_field()}}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa el nombre del area">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
	<br>
	<!--tabla-->
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
    </tr>
  </thead>
  <!tbody>
    @foreach($categorias as $categoria)
    <tr>
      <td>{{ $categoria->nombre }}</td>
      <td>{{ $categoria->descripcion }}</td>
    </tr>

    @endforeach
  </tbody>
  {!! $categorias ->render() !!}
</table>

@endsection