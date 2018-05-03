@extends('template.base')

@section('title','crear proveedor')
	

@section('content-yield')
    <div class="container">
      <div class="titulo">
        <h2 class="text-right">Proveedores</h2>
      </div>
      <hr />

    <div class="row">
      
      <div class="col-sm-12 col-md-4 card-container">

        <div class="card card-outline-secondary border-info">
          <div class="card-header border-info">
              <h5 class="mb-0">Crear Nuevo</h5>
          </div>
          <div class="card-body">
            <form action="/admin/proveedores" method="POST" role="form">
              {{csrf_field()}}
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Juan Perez">
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="correo">Correo</label>
                  <input name="correo" type="text" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="ejemplo@xxx.com">
                </div>
                <div class="form-group col-6">
                  <label for="pag_web">Pag:Web</label>
                  <input name="pag_web" type="text" class="form-control" id="pag_web" aria-describedby="emailHelp" placeholder="www.ejemplo.com">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="telefono">Telefono</label>
                  <input name="telefono" type="text" class="form-control" id="telefono" placeholder="7777777">
                </div>
                <div class="form-group col-6">
                  <label for="fax">Fax</label>
                  <input name="fax" type="text" class="form-control" id="fax"  placeholder="fax">
                </div>
              </div>

              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input name="direccion" type="text" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Ingresa direccion">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                            
          </div>
        </div> 

      </div>

      <div class="col-sm-12 col-md-8 card-container">
         <div class="card card-outline-secondary border-info">
          <div class="card-body">    
            <table class="table table-striped list-container">
              <thead>
                <tr>
                  <th scope="col">nombre</th>
                  <th scope="col">telefono</th>
                  <th scope="col">correo</th>
                  <th scope="col">direccion</th>
                  <th scope="col">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                  <td>{{ $proveedor->nombre }}</td>
                  <td>{{ $proveedor->telefono }}</td>
                  <td>{{ $proveedor->correo }}</td>
                  <td>{{ $proveedor->direccion }}</td>
                  <td>{{ $proveedor->opciones }}</td>
                </tr>

                @endforeach
              </tbody>
              
            </table>
            {!! $proveedores ->render() !!}
          </div>
         </div>    
      </div>

      

    

    </div>

  </div>


  <!--
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
-->
@endsection