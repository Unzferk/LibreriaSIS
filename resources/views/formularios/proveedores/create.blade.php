@extends('template.base')

@section('title','crear proveedor')
	

@section('content-yield')
    <div class="container">
      <div class="titulo">
        <h2 class="text-left"> <b>Proveedores</b></h2>
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
<button type="button" class="btn btn-info button-circle" 
data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
  <b>+</b>
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
      </div>
      <div class="modal-body">
            <form action="/admin/proveedores" method="POST" role="form">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-8">
                  <label for="nombre colFormLabelSm">Nombre</label>
                <input name="nombre" type="text" class="form-control form-control-sm" id="nombre" placeholder="Lapiceros">
               </div>
                <div class="form-group col-4">
                  <label for="codigo_prv colFormLabelSm">Código</label>
                <input name="codigo_prv" type="text" class="form-control form-control-sm" id="codigo_prv" placeholder="1234">
              </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="correo">Correo</label>
                  <input name="correo" type="text" class="form-control form-control-sm" id="correo" aria-describedby="emailHelp" placeholder="ejemplo@xxx.com">
                </div>
                <div class="form-group col-6">
                  <label for="pag_web">Pag:Web</label>
                  <input name="pag_web" type="text" class="form-control form-control-sm" id="pag_web" aria-describedby="emailHelp" placeholder="www.ejemplo.com">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="telefono">Telefono</label>
                  <input name="telefono" type="text" class="form-control form-control-sm" id="telefono" placeholder="7777777">
                </div>
                <div class="form-group col-6">
                  <label for="fax">Fax</label>
                  <input name="fax" type="text" class="form-control form-control-sm" id="fax"  placeholder="fax">
                </div>
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input name="direccion" type="text" class="form-control form-control-sm" id="direccion" aria-describedby="emailHelp" placeholder="Ingresa direccion">
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
            <table class="table table-striped" id='Mytable'>
              <thead>
                <tr>
                  <th scope="col">codigo</th>
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
                  <td>{{ $proveedor->codigo_prv }}</td>
                  <td>{{ $proveedor->nombre }}</td>
                  <td>{{ $proveedor->telefono }}</td>
                  <td>{{ $proveedor->correo }}</td>
                  <td>{{ $proveedor->direccion }}</td>
                  <td>
                    <a href=" {{ route('admin.proveedores.destroy', $proveedor->id) }} " class="btn btn-danger">Eliminar</a>
      
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#proveEditModal" data-ide=" {{$proveedor->id}} " data-nombre= "{{$proveedor->nombre}}" data-codigo= "{{$proveedor->codigo_prv}}" data-correo= "{{$proveedor->correo}}" data-pag_web= "{{$proveedor->pag_web}}" data-telefono= "{{$proveedor->telefono}}" data-fax= "{{$proveedor->fax}}" data-direccion= "{{$proveedor->direccion}}" data-dismiss="modal">Editar</button>
                </tr>

                @endforeach
              </tbody>
              
            </table>
            {!! $proveedores ->render() !!}
          </div>
         </div>    
      </div>    

    </div>



<!-- Modal Edit-->
<div class="modal fade" id="proveEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
      </div>
      <div class="modal-body">
            
            <form action="{{route('proveedores.update','test')}}" method="POST" role="form">
              {{csrf_field()}}
              {{method_field('patch')}}
              <input type="hidden" name="ide" id="ide">
              <div class="form-row">
                <div class="form-group col-8">
                  <label for="nombre colFormLabelSm">Nombre</label>
                <input name="nombre" type="text" class="form-control form-control-sm" id="nombre" placeholder="Lapiceros">
               </div>
                <div class="form-group col-4">
                  <label for="codigo_prv colFormLabelSm">Código</label>
                <input name="codigo_prv" type="text" class="form-control form-control-sm" id="codigo_prv" placeholder="1234">
              </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="correo">Correo</label>
                  <input name="correo" type="text" class="form-control form-control-sm" id="correo" aria-describedby="emailHelp" placeholder="ejemplo@xxx.com">
                </div>
                <div class="form-group col-6">
                  <label for="pag_web">Pag:Web</label>
                  <input name="pag_web" type="text" class="form-control form-control-sm" id="pag_web" aria-describedby="emailHelp" placeholder="www.ejemplo.com">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <label for="telefono">Telefono</label>
                  <input name="telefono" type="text" class="form-control form-control-sm" id="telefono" placeholder="7777777">
                </div>
                <div class="form-group col-6">
                  <label for="fax">Fax</label>
                  <input name="fax" type="text" class="form-control form-control-sm" id="fax"  placeholder="fax">
                </div>
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input name="direccion" type="text" class="form-control form-control-sm" id="direccion" aria-describedby="emailHelp" placeholder="Ingresa direccion">
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


  </div>
<script>
  $('#proveEditModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var mide = button.data('ide')
  var mnombre = button.data('nombre')
  var mcodigo = button.data('codigo')
  var mcorreo = button.data('correo')
  var mpag_web = button.data('pag_web')
  var mtelefono = button.data('telefono')
  var mfax = button.data('fax')
  var mdireccion = button.data('direccion') 
  
  var modal = $(this)
  
  modal.find('.modal-body #ide').val(mide);
  modal.find('.modal-body #nombre').val(mnombre);
  modal.find('.modal-body #codigo_prv').val(mcodigo);
  modal.find('.modal-body #correo').val(mcorreo);
  modal.find('.modal-body #pag_web').val(mpag_web);
  modal.find('.modal-body #telefono').val(mtelefono);
  modal.find('.modal-body #fax').val(mfax);
  modal.find('.modal-body #direccion').val(mdireccion);
  })
</script>

@endsection