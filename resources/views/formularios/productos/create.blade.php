@extends('template.base')

@section('title','crear producto')
  

@section('content-yield')

<div class="container">
      <div class="titulo ">
        <h2 class="text-left"><b>Productos</b></h2>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby= "exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
      </div>
      <div class="modal-body">
        <form action="/admin/productos" method="POST" role="form">
              {{csrf_field()}}
              <div class="form-row ">
                <div class="form-group col-6">
                  <label for="nombre colFormLabelSm">Nombre</label>
                <input name="nombre" type="text" class="form-control form-control-sm" id="nombre" placeholder="Lapiceros">
               </div>
                <div class="form-group col-6">
                  <label for="codigo_pro colFormLabelSm">Codigo</label>
                <input name="codigo_pro" type="text" class="form-control form-control-sm" id="codigo_pro" placeholder="1234">
              </div>
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
              <div class="form-row ">

                <div class="form-group col-6">
                  <label for="seccion_id colFormLabelSm">Seccion_id</label>
                  <select name="seccion_id" id="seccion_id" class="form-control form-control-sm" >
                    <option value="">seleccione una seccion</option>
                    @foreach( $secciones as $seccion )
                      <option value=" {{$seccion['id']}} ">{{$seccion['nombre']}} </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="descripcion colFormLabelSm">Descripcion</label>
                <input name="descripcion" type="text" class="form-control form-control-sm" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresa descripcion">
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
                  <td>{{ $producto->codigo_pro }}</td>
                  <td>{{ $producto->nombre }}</td>
                  <td>{{ $producto->marca }}</td>
                  <td>{{ $producto->precio }}</td>
                  <td>{{ $producto->stock }}</td>
                  <td>{{ $producto->seccion->nombre }}</td>
                  <td>{{ $producto->descripcion }}</td>
                  <td>
                    <a href=" {{ route('admin.productos.destroy', $producto->id) }} " class="btn btn-danger btn-sm"><span class="lnr lnr-cross " style="color: white;"></span></a>
      
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#productEditModal" data-ide=" {{$producto->id}} " data-nombre= "{{$producto->nombre}}" data-codigo_pro= "{{$producto->codigo_pro}}" data-marca= "{{$producto->marca}}" data-precio= "{{$producto->precio}}" data-stock= "{{$producto->stock}}" data-seccion_id= "{{$producto->seccion_id}}" data-descripcion= "{{$producto->descripcion}}" data-dismiss="modal" ><span class="lnr lnr-pencil " style="color: black;"></span></button>

                     
                  </td>
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
  
<!-- Edit Modal-->
<div class="modal fade" id="productEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
      </div>
      <div class="modal-body">

        <form class="form"  action="{{route('productos.update','test')}}" method="POST" role="form" autocomplete="off">
              {{csrf_field()}}
              {{method_field('patch')}}
              <fieldset>  
                <div class="form-row ">
                <div class="form-group col-6">
                  <label for="nombre colFormLabelSm">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" required="">
                </div>
                <div class="form-group col-6">
                  <label for="codigo_pro colFormLabelSm">Codigo</label>
                  <input name="codigo_pro" type="text" class="form-control form-control-sm" id="codigo_pro" required="">
                </div>
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
              <div class="form-row ">
                <div class="form-group col-6">
                  <label for="seccion_id colFormLabelSm">Seccion_id</label>
                  <select name="seccion_id" id="seccion_id" class="form-control form-control-sm" >
                    @foreach( $secciones as $seccion )
                      <option value=" {{$seccion['id']}} ">{{$seccion['nombre']}} </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="descripcion colFormLabelSm">Descripcion</label>
                <input name="descripcion" type="text" class="form-control form-control-sm" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresa descripcion">
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
  $('#productEditModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var mnombre = button.data('nombre')
  var mcodigo_pro = button.data('codigo_pro')
  var mmarca = button.data('marca')
  var mprecio = button.data('precio')
  var mstock = button.data('stock')
  var mseccion_id = button.data('seccion_id')
  var mdescripcion = button.data('descripcion') 
  var mide = button.data('ide')
  var modal = $(this)
  
  modal.find('.modal-body #ide').val(mide);
  modal.find('.modal-body #nombre').val(mnombre);
  modal.find('.modal-body #codigo_pro').val(mcodigo_pro);
  modal.find('.modal-body #marca').val(mmarca);
  modal.find('.modal-body #precio').val(mprecio);
  modal.find('.modal-body #stock').val(mstock);
  modal.find('.modal-body #seccion_id').val(mseccion_id);
  modal.find('.modal-body #descripcion').val(mdescripcion);
  })
</script>
@endsection
