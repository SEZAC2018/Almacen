 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Articulo</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Articulo</a></li>
      <li class="active">Alta Articulo</li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Articulo</h2>
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
              <label class="col-sm-3 control-label">Nombre Articulo<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input autofocus name="idLocalidad" id="idLocalidad" parsley-type="number" class="form-control" required value="" placeholder="Ingrese el nombre de Articulo" />
             </div>
           </div><!--/form-group-->
           <div class="form-group">

             <label class="col-sm-3 control-label">Cantidad articulo: <strog class="theme_color">*</strog></label>
             <div class="col-sm-6">
              <input name="municipio" type="text" class="form-control" required value="" placeholder="Ingrese Cantidad Articulo"/>
            </div>
          </div><!--/form-group-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Almacen:<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select class="form-control" name="ambito" required id="ambito">
                <option value=""> 
                 Almacen 1             
               </option>
               <option value=""> 
                 Almacen 2            
               </option>
             </select>
           </div>
         </div><!--/form-group-->

         <div class="form-group">
          <label class="col-sm-3 control-label">Unidad de Medida:<strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <select class="form-control" name="ambito" required id="ambito">
              <option value=""> 
               Caja             
             </option>
             <option value=""> 
               Paquete            
             </option>

             <option value=""> 
               Pieza           
             </option>
           </select>
         </div>
       </div><!--/form-group-->

       <div class="form-group">
        <label class="col-sm-3 control-label">Tipo Articulo:<strog class="theme_color">*</strog></label>
        <div class="col-sm-6">
          <select class="form-control" name="ambito" required id="ambito">
            <option value=""> 
              Consumible          
            </option>
            <option value=""> 
             Papeleria            
           </option>


         </select>
       </div>
     </div><!--/form-group-->


     <div class="form-group">

      <label class="col-sm-3 control-label">Fecha Caducidad: <strog class="theme_color">*</strog></label>
      <div class="col-sm-6">
        <input type="text" class="form-control mask" data-inputmask="'alias': 'date'">
      </div>
    </div><!--/form-group-->


    <div class="form-group">
      <label class="col-sm-3 control-label">Partida:<strog class="theme_color">*</strog></label>
      <div class="col-sm-6">
        <select class="form-control" name="ambito" required id="ambito">
          <option value=""> 
            2111          
          </option>
          <option value=""> 
           2121            
         </option>


       </select>
     </div>
   </div><!--/form-group-->


   <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?c=Articulo" class="btn btn-default"> Cancelar</a>
    </div>
  </div><!--/form-group-->
</form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 