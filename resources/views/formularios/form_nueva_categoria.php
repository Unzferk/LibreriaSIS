<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nueva Categoria</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>


<form  id="f_nueva_categoria"  method="post"  action="agregar_nueva_categoria" class="form-horizontal form_entrada" >                
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
  <div class="form-group col-xs-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" >
  </div>
  <div class="form-group col-xs-12">
                        <label for="apellido">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" >
  </div>
</div>

<div class="box-footer col-xs-12 ">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

</form>

</div>
