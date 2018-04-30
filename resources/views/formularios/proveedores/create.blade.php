@extends('template.base')

@section('title','crear proveedor')
	

@section('content-yield')
	<form action="/admin/proveedores" method="POST" role="form">
		{{csrf_field()}}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa el nombre del proveedor">
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Ingresa telefono">
  </div>

  <div class="form-group">
    <label for="correo">Correo</label>
    <input name="correo" type="text" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingresa el correo del proveedor">
  </div>

  <div class="form-group">
    <label for="pag_web">Pag:Web</label>
    <input name="pag_web" type="text" class="form-control" id="pag_web" aria-describedby="emailHelp" placeholder="Ingresa pag_web">
  </div>
  
  <div class="form-group">
    <label for="fax">Fax</label>
    <input name="fax" type="text" class="form-control" id="fax"  placeholder="Ingresa el fax del proveedor">
  </div>

  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input name="direccion" type="text" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Ingresa direccion">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
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
  	
  </tbody>
</table>

@endsection