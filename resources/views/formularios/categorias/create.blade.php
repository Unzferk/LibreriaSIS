@extends('template.base')

@section('title','crear categoria')

@section('content-yield')
  
<div class="container">
      <div class="titulo ">
        <h2 class="text-left"><b>Categorias</b></h2>
      </div>      
      <hr/>
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
                                </fieldset>
        </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
          </div>
          </form>
    </div>
  </div>
</div>

<!--form div-->
  <div class="row">
      <div class="col-sm-12 col-md-18 card-container">
        <div class="card card-outline-secondary border-info">
          <div class="card-body">    
            <table class="table table-striped " id='Mytable'>
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
                  <td>
                    <a href=" {{ route('admin.categorias.destroy', $categoria->id) }} " class="btn btn-danger btn-sm"><b>X</b></a>
      
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#cateEditModal" data-ide=" {{$categoria->id}} " data-nombre= "{{$categoria->nombre}}" data-descripcion= "{{$categoria->descripcion}}" data-dismiss="modal"  >Editar</button>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {!! $categorias ->render() !!}
          </div>
         </div>

      </div>
  </div>

<!-- Edit Modal-->
<div class="modal fade" id="cateEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
      </div>
      <div class="modal-body">

        <form class="form"  action="{{route('categorias.update','test')}}" method="POST" role="form" autocomplete="off">
                               {{csrf_field()}}
                               {{method_field('patch')}}

                                <fieldset>  
                                    <input type="hidden" name="ide" id="ide">
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
                                </fieldset>
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

<script>
  $('#cateEditModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var mnombre = button.data('nombre')
  var mdescripcion = button.data('descripcion') 
  var mide = button.data('ide')
  var modal = $(this)
  
  modal.find('.modal-body #ide').val(mide);
  modal.find('.modal-body #nombre').val(mnombre);
  modal.find('.modal-body #descripcion').val(mdescripcion);
  })
</script>

@endsection
