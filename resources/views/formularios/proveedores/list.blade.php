@extends('template.base')

@section('title','crear proveedor')
	

@section('content-yield')
	
	<br>
	<!--tabla-->
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
      <th scope="col">pag-web</th>
      <th scope="col">fax</th>
      <th scope="col">direccion</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($proveedores as $proveedor)
    <tr>
      <td>{{ $proveedor->nombre }}</td>
      <td>{{ $proveedor->telefono }}</td>
      <td>{{ $proveedor->correo }}</td>
      <td>{{ $proveedor->pag-web }}</td>
      <td>{{ $proveedor->fax }}</td>
      <td>{{ $proveedor->direccion }}</td>
    </tr>

    @endforeach
  	
  </tbody>
</table>

@endsection