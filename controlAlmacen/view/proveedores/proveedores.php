 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Proveedores</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Proveedores</a></li>
      <li class="active">Alta Proveedor</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Proveedor</h2>
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
              <label class="col-sm-3 control-label">Nombre Proveedor<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
              <input onchange="mayus(this);" type="text" class="form-control" maxlength="50" placeholder="Ingrese el Nombre del Proveedor">
             </div>
           </div><!--/form-group-->
           <div class="form-group">

             <label class="col-sm-3 control-label">RFC: <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
               <input onchange="mayus(this);"  type="text" class="form-control" name="rfc"  id="rfc" onblur="ValidaRfc(this.value)" maxlength="13" placeholder="Ingrese RFC del Proveedor">
       
            </div>
          </div><!--/form-group-->

          <div class="form-group">

             <label class="col-sm-3 control-label">Dirección: <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
              <input onchange="mayus(this);" type="text" class="form-control" maxlength="90" placeholder="Ingrese Direccion del proveedor"/>
            </div>
          </div><!--/form-group-->
         


   <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?c=Proveedores" class="btn btn-default"> Cancelar</a>
    </div>
  </div><!--/form-group-->
</form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 