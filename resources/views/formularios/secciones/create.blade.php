@extends('template.base')

@section('title','crear seccion')
  

@section('content-yield')

<div class="container">
      <div class="titulo ">
        <h2 class="text-left"><b>Secciones</b></h2>
      </div>      
      <hr/>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>  
 <!-- Button trigger modal -->
<button type="button" class="btn btn-info button-circle" 
data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
  <b>+</b>
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Nueva Categoria</h5>
      </div>
      <div class="modal-body">
      <form action="/admin/secciones" method="POST" role="form">
        {{csrf_field()}}
        <div class="form-group">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa el nombre del area">
        <label for="descripcion">Descripcion</label>
        <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresa la descripcion">
        </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
          </div>
      </form>
    </div>
  </div>
</div>
</div>



<div class="row">
      <div class="col-sm-12 col-md-18 card-container">
        <div class="card card-outline-secondary border-info">
          <div class="card-body">    
            <table class="table table-striped " id='Mytable'>
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($secciones as $seccion)
    <tr>
      <td>{{ $seccion->nombre }}</td>
      <td>{{ $seccion->descripcion }}</td>
    </tr>

    @endforeach
  </tbody>
  {!! $secciones ->render() !!}
</table>

@endsection
</div>
         </div>

      </div>
  </div>