@extends('template.base')

@section('title','crear seccion')
  

@section('content-yield')
  
  <form action="/admin/secciones" method="POST" role="form">
    {{csrf_field()}}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa el nombre del area">
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
  <tbody>
    @foreach($secciones as $seccion)
    <tr>
      <td>{{ $seccion->nombre }}</td>
      
    </tr>

    @endforeach
  </tbody>
  {!! $secciones ->render() !!}
</table>

@endsection