@extends('template.base')

@section('title','home')
	

@section('content-yield')

<div class="container">
      <div class="titulo ">
        <h2 class="text-left"><b>Stock</b></h2>
      </div>
      
<hr />
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

	<div class="container ">
		
		<div class="row">

      <div class="col-sm-12 col-md-18 card-container">
         <div class="card card-outline-secondary border-info">
          <div class="card-body">    
            <table class="table table-striped" id='Mytable'>
              <thead>
                <tr>
                  <th scope="col">codigo</th>
                  <th scope="col">nombre</th>
                  <th scope="col">marca</th>
                  <th scope="col">precio</th>
                  <th scope="col">stock</th>
                  <th scope="col">seccion</th>
                  <th scope="col">descripcion</th>
                  <th scope="col">opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $producto)
                <tr>
                  @if({{($producto->stock) < 10 }})

                  <td>{{ $producto->codigo_pro }}</td>
                  <td>{{ $producto->nombre }}</td>
                  <td>{{ $producto->marca }}</td>
                  <td>{{ $producto->precio }}</td>
                  <td>{{ $producto->stock }}</td>
                  <td>{{ $producto->seccion->nombre }}</td>
                  <td>{{ $producto->descripcion }}</td>
                  <td>
                    <a href=" {{ route('admin.productos.destroy', $producto->id) }} " class="btn btn-danger btn-sm">Eliminar</a>
      
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#productEditModal" data-ide=" {{$producto->id}} " data-nombre= "{{$producto->nombre}}" data-codigo_pro= "{{$producto->codigo_pro}}" data-marca= "{{$producto->marca}}" data-precio= "{{$producto->precio}}" data-stock= "{{$producto->stock}}" data-seccion_id= "{{$producto->seccion_id}}" data-descripcion= "{{$producto->descripcion}}" data-dismiss="modal" >Editar</button>                     
                  </td>
                  @endif
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

