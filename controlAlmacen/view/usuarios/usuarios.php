 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Usuarios</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Usuarios</a></li>
      <li class="active">Alta Usuarios</li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Usuario</h2>
            </div>
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions"> 
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="porlets-content">
          <form action="" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>

            <div class="form-group">
              <label class="col-sm-3 control-label">Nombre del departamento<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input onkeypress="return soloLetras(event);" onchange="mayus(this);" type="text" class="form-control" maxlength="45" placeholder="Nombre del departamento">
             </div>
           </div><!--/form-group-->


            <div class="form-group">
              <label class="col-sm-3 control-label">Nombre(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
                <input onchange="mayus(this);" onkeypress="return soloLetras(event);" type="text" class="form-control" maxlength="45" placeholder="Nombre del Empleado ">
             </div>
           </div><!--/form-group-->
           <div class="form-group">

             <label class="col-sm-3 control-label">Primer Apellido: <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
              <input onchange="mayus(this);" onkeypress="return soloLetras(event);" type="text" class="form-control" maxlength="45" placeholder="Ingrese el Primer Apellido">
            </div>
          </div><!--/form-group-->

          <div class="form-group">

             <label class="col-sm-3 control-label">Segundo Apellido: <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
               <input onchange="mayus(this);" onkeypress="return soloLetras(event);" type="text" class="form-control" maxlength="45" placeholder="Ingrese el Segundo Apellido">
            </div>
          </div><!--/form-group-->
          <div class="form-group">

             <label class="col-sm-3 control-label">Contraseña : <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
               <input type="text" class="form-control" maxlength="12" placeholder="Nombre del departamento">
            </div>
          </div><!--/form-group-->


   <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?c=Usuario" class="btn btn-default"> Cancelar</a>
    </div>
  </div><!--/form-group-->
</form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content  panel default red_border horizontal_border_1">
          <div class="modal-body">
            <div class="row">
              <div class="block-web">
                <div class="header">
                  <h3 class="content-header theme_color">&nbsp;Eliminar Usuarios</h3>
                </div>
                <div class="porlets-content" style="margin-bottom: -50px;">
                  <h4>¿Esta segúro que desea eliminar el Usuario?</h4>
                </div><!--/porlets-content-->
              </div><!--/block-web-->
            </div>
          </div>
          <div class="modal-footer" style="margin-top: -10px;">
            <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
              <form action="?c=Usuario&a=Eliminar" enctype="multipart/form-data" method="post">
                <input type="hidden" name="idUsuario" id="txtIdUsuario">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        </div><!--/modal-content-->
      </div><!--/modal-dialog-->
</div><!--/modal-fade-->

<script>



  eliminarDireccion = function(idUsuario){
   
    $('#txtIdArticulo').val(idUsuario);
  };
   deshabilitar = function (){
  $('#btnImportar').attr("disabled", true);
}
</script>
