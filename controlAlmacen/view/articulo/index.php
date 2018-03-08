      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Catálogos</h1>
          <h2 class="">Artículo</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="?c=Inicio">Inicio</a></li>
            <li class="active">Artículo</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <div class="row">
          <div class="col-md-12">
            <div class="block-web">
              <div class="header">
                <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
                  <div class="col-sm-7">
                    <div class="actions"> </div>
                    <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Artículos</h2>
                  </div>
                  <div class="col-md-5">
                    <div class="btn-group pull-right">
                      <b>

                        <div class="btn-group" style="margin-right: 10px;">
                          <a class="btn btn-sm btn-success tooltips" href="?c=Articulo&a=Crud" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar nueva Direccion"> <i class="fa fa-plus"></i> Registrar </a>

                        </div>

                      </b>
                    </div>
                  </div>
                </div>
              </div>


              <div class="porlets-content">
                <div class="table-responsive">
                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Almacen</th>
                        <th>Unidad de Medida</th>
                        <th>Fecha Caducidad</th>
                        <th>Tipo Articulo</th>
                        <th>Partida</th>

                        <td><center><b>Editar</b></center></td>
                        <td><center><b>Borrar</b></center></td>

                      </tr>
                    </thead>
                    <tbody>


                      <?php foreach ($this->model->Listar() as $r): ?> 

                      }
                      <tr class="gradeA">

                        <td><?php echo $r->nombre;?></td>
                        <td> <?php echo $r->cantidad; ?></td>
                        <td> <?php echo $r->nomAlmacen; ?></td>
                        <td> <?php echo $r->unidadMedidad; ?></td>
                        <td> <?php echo $r->fechaCaducidad; ?></td>
                        <td> <?php echo $r->tipoArticulo; ?></td>
                        <td> <?php echo $r->concepto; ?></td>

                        <td class="center">
                          <a href="index.php?c=Articulo&a=Crud&idArticulo=<?php echo $r->idArticulo ?>" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                        </td>
                        <td class="center">
                          <a onclick="eliminarArticulo(<?php echo $r->idArticulo;?>);" class="btn btn-danger btn-sm" href="#modalEliminar"  data-toggle="modal" data-target="#modalEliminar" role="button"><i class="fa fa-eraser"></i></a>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                    

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Almacen</th>
                      <th>Unidad de Medida</th>
                      <th>Fecha Caducidad</th>
                      <th>Tipo Articulo</th>
                      <th>Partida</th>


                      <td><center><b>Editar</b></center></td>
                      <td><center><b>Borrar</b></center></td>

                    </tr>
                  </tfoot>
                </table>
              </div><!--/table-responsive-->
            </div><!--/porlets-content-->
          </div><!--/block-web-->
        </div><!--/col-md-12-->
      </div><!--/row-->


      <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content  panel default red_border horizontal_border_1">
            <div class="modal-body">
              <div class="row">
                <div class="block-web">
                  <div class="header">
                    <h3 class="content-header theme_color">&nbsp;Eliminar Artículo</h3>
                  </div>
                  <div class="porlets-content" style="margin-bottom: -50px;">
                    <h4>¿Esta segúro que desea eliminar el Artículo?</h4>
                  </div><!--/porlets-content-->
                </div><!--/block-web-->
              </div>
            </div>
            <div class="modal-footer" style="margin-top: -10px;">
              <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
                <form action="?c=Articulo&a=Eliminar" enctype="multipart/form-data" method="post">
                  <input type="hidden" name="idArticulo" id="txtIdArticulo">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </div>
            </div>
          </div><!--/modal-content-->
        </div><!--/modal-dialog-->
      </div><!--/modal-fade-->

      <script>



        eliminarDireccion = function(idArticulo){

          $('#txtIdArticulo').val(idArticulo);
        };
        deshabilitar = function (){
          $('#btnImportar').attr("disabled", true);
        }
      </script>

