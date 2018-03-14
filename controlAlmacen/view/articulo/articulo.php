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
          <div class="porlets-content">
            <form  id="frm-articulo" action="?c=Articulo&a=Guardar" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>


              <!--este  no esta  agregarlo en todos -->
              <input type="hidden" name="idArticulo" value="<?php echo $articulo->idArticulo; ?>" />


              <div class="form-group">
                <label class="col-sm-3 control-label">Nombre Articulo<strog class="theme_color">*</strog></label>
                <div class="col-sm-6">

                 <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="nombre" id="nombre" 
                 maxlength="70" required value="" placeholder="Ingrese el Nombre del Articulo">
               </div>
             </div><!--/form-group-->
             <div class="form-group">



              <!-- autofocus name="nombre" id="nombre" -->





              <label class="col-sm-3 control-label">Cantidad articulo: <strog class="theme_color">*</strog></label>
              <div class="col-sm-6">
               <input onkeypress="return soloNumeros(event);" type="text" class="form-control"  autofocus name="cantidad" maxlength="12" placeholder="Ingrese la cantidad del Articulo">
             </div>
           </div><!--/form-group-->


         

<div class="form-group">
      <label class="col-sm-3 control-label">Almacen<strog class="theme_color">*</strog></label>
      <div class="col-sm-6">
        <select name="idAlmacen" class="form-control" required>
          <?php if($articulos->idAlmacen==null){ ?>
          <option value="">
            Seleccione el Almacen
          </option>
          <?php } if($articulos->idAlmacen!=null){ ?>
          <option value="<?php echo $articulos->idAlmacen ?>">
            <?php echo $articulos->nombre; ?>
          </option>
          <?php } foreach($this->model2->Listar() as $r):
          if($r->nombre!=$articulos->nombre){ ?>
          <option value="<?php echo $r->idAlmacen; ?>">
            <?php echo $r->nombre; ?>
          </option>
          <?php } endforeach; ?>
        </select>
        <div class="help-block with-errors"></div>
      </div>
    </div><!--/form-group-->








         <div class="form-group">
          <label class="col-sm-3 control-label">Unidad de Medida:<strog class="theme_color">*</strog></label>
          <div class="col-sm-6">
            <select class="form-control" name="unidadMedidad" required id="ambito">
              <option value="CAJA"> 
               CAJA          
             </option>
             <option value="PAQUETE"> 
               PAQUETE           
             </option>

             <option value="PIEZA"> 
               PIEZA          
             </option>
           </select>
         </div>
       </div><!--/form-group-->


       <div class="form-group">
        <label class="col-sm-3 control-label">Fecha Caducidad: <strog class="theme_color">*</strog></label>
        <div class="col-sm-6">
          <input type="text" class="form-control mask" name="fechaCaducidad" data-inputmask="'alias': 'date'">
        </div>
      </div><!--/form-group-->

      <div class="form-group">
        <label class="col-sm-3 control-label">Tipo Articulo:<strog class="theme_color">*</strog></label>
        <div class="col-sm-6">
          <select class="form-control" name="tipoArticulo" required id="ambito">
            <option value="CONSUMIBLE"> 
              CONSUMIBLE         
            </option>
            <option value="PAPELERIA"> 
             PAPELERIA           
           </option>


         </select>
       </div>
     </div><!--/form-group-->









     <div class="form-group">
      <label class="col-sm-3 control-label">Partida<strog class="theme_color">*</strog></label>
      <div class="col-sm-6">
        <select name="idPartida" class="form-control" required>
          <?php if($articulos->idPartida==null){ ?>
          <option value="">
            Seleccione la partida perteniciente
          </option>
          <?php } if($articulos->idPartida!=null){ ?>
          <option value="<?php echo $articulos->idPartida ?>">
            <?php echo $articulos->concepto; ?>
          </option>
          <?php } foreach($this->model1->Listar() as $r):
          if($r->concepto!=$articulos->concepto){ ?>
          <option value="<?php echo $r->idPartida; ?>">
            <?php echo $r->concepto; ?>
          </option>
          <?php } endforeach; ?>
        </select>
        <div class="help-block with-errors"></div>
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