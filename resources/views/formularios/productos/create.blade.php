@extends('template.base')

@section('title','crear producto')
	

@section('content-yield')

<div class="container">
      <div class="titulo ">
        <h2 class="text-left">Productos</h2>
      </div>
      
<hr />
<!--errors-->
    @if (count($errors)>0)
      
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul> 
      </div>

    @endif


<div class="container">
    
    <div class="row">
      
      <div class="col-sm-12 col-md-4 card-container">

        <div class="card card-outline-secondary border-info">
          <div class="card-header border-info">
              <h5 class="mb-0">Crear Nuevo</h5>
          </div>
          <div class="card-body">
            <form action="/admin/productos" method="POST" role="form">
              {{csrf_field()}}
              <div class="form-group">
                <label for="colFormLabelSm">Nombre</label>
                <input name="nombre" type="text" class="form-control form-control-sm" id="nombre" placeholder="Lapiceros">
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="marca colFormLabelSm">Marca</label>
                  <input name="marca" type="text" class="form-control form-control-sm" id="marca" placeholder="Sabonis">
                </div>
                <div class="form-group col-3">
                  <label for="precio colFormLabelSm">Precio</label>
                  <input name="precio" type="text" class="form-control form-control-sm" id="precio"  placeholder="99.9">
                </div>
                <div class="form-group col-3">
                  <label for="stock colFormLabelSm">Stock</label>
                  <input name="stock" type="text" class="form-control form-control-sm" id="stock"  placeholder="999">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="categoria_id colFormLabelSm">Categoria_id</label>
                  <input name="categoria_id" type="text" class="form-control form-control-sm" id="categoria_id" placeholder="Ingresa categoria_id">
                </div>
                <div class="form-group">
                  <label for="seccion_id colFormLabelSm">Seccion_id</label>
                  <input name="seccion_id" type="text" class="form-control form-control-sm" id="seccion_id"  placeholder="Ingresa seccion_id">
                </div>
              </div>

              <div class="form-group">
                <label for="descripcion colFormLabelSm">Descripcion</label>
                <input name="descripcion" type="text" class="form-control form-control-sm" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresa descripcion">
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
                  <th scope="col">marca</th>
                  <th scope="col">precio</th>
                  <th scope="col">seccion</th>
                  <th scope="col">opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>
                  <td>{{ $producto->marca }}</td>
                  <td>{{ $producto->precio }}</td>
                  <td>{{ $producto->seccion }}</td>

                </tr>

                @endforeach
              </tbody>
              
            </table>
            {!! $productos->render() !!}
          </div>
         </div>    
      </div>

      
    </div>

  </div>
	

@endsection



<!--
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
-->