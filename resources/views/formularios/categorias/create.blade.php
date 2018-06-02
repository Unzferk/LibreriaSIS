@extends('template.base')

@section('title','crear categoria')

@section('content-yield')
  
  <div class="container">
      <div class="titulo ">
        <h2 class="text-left">Categorias</h2>
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


<script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-sm-12 col-md-24 card-container">
         <div class="card card-outline-secondary border-info">
                        <div class="card-header border-info">
                            <h5 class="mb-0">Crear Nueva Categoria</h5>
                        </div>
                        <div class="card-body">
                            <form class="form"  action="/admin/categorias" method="POST" role="form" autocomplete="off">

                              {{csrf_field()}}
                                <fieldset>
                                    <label for="nombre" class="mb-0">Nombre</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="nombre" id="nombre" class="form-control" required="">
                                        </div>
                                    </div>
                                    <label for="descripcion" class="mb-0">Descripcion</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <textarea rows="6" name="descripcion" id="descripcion" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                   
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
    <!--form div-->
  <div class="row">

      <div class="col-sm-12 col-md-18 card-container">
        <div class="card card-outline-secondary border-info">
          <div class="card-body">    
            <table class="table table-striped list-container">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categorias as $categoria)
                <tr>
                  <td>{{ $categoria->nombre }}</td>
                  <td>{{ $categoria->descripcion }}</td>
                </tr>

                @endforeach
              </tbody>
              
            </table>
            {!! $categorias ->render() !!}
          </div>
         </div>

      </div>
  </div>
</div>
@endsection
