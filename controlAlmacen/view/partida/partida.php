 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Partida</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Partida</a></li>
      <li class="active">Alta Partidao</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Partida</h2>
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
        <form  id="frm-articulo" action="?c=Partida&a=Guardar" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>

         <div class="form-group">

              <!-- autofocus name="nombre" id="nombre" -->

              <label class="col-sm-3 control-label">Numero de Partida: <strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input onkeypress="return soloNumeros(event);" type="text" class="form-control"  autofocus name="cantidad" maxlength="5" placeholder="Ingrese la cantidad del Articulo">
             </div>
           </div><!--/form-group-->

       <div class="form-group">
                <label class="col-sm-3 control-label">Concepto de Partida<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">

                 <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="nombre" id="nombre" 
                 maxlength="70" required value="" placeholder="Ingrese el Nombre de la Partida">
               </div>
             </div><!--/form-group-->
             <div class="form-group">

            

              <div class="form-group">


   <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?c=Partida" class="btn btn-default"> Cancelar</a>
    </div>
  </div><!--/form-group-->
</form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 