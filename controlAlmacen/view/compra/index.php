      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Catálogos</h1>
          <h2 class="">Hacer Compra</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="?c=Inicio">Inicio</a></li>
            <li class="active">Compra</a></li>
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
                    <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Compras</h2>
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

                      <tr class="gradeA">

                        <td>Hojas de Maquina</td>
                        <td>2 </td>
                        <td>Almacen 1</td>
                        <td>Caja</td>
                        <td>02/08/2018</td>
                        <td>Consumible</td>
                        <td>2111</td>

                        <td class="center">
                          <a href="registrarArticulo.php" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                        </td>
                        <td class="center">
                          <a onclick="eliminarDireccion(<?php echo $r->idDireccion;?>);" class="btn btn-danger btn-sm" href="#modalEliminar"  data-toggle="modal" data-target="#modalEliminar" role="button"><i class="fa fa-eraser"></i></a>
                        </td>

                      </tr>

                      <tr class="gradeA">

                        <td>Plumas</td>
                        <td>2 </td>
                        <td>Almacen 2</td>
                        <td>Paquetes</td>
                        <td>02/08/2018</td>
                        <td>Consumible</td>
                        <td>2111</td>

                        <td class="center">
                          <a href="index.php?c=Direccion&a=Crud&idDireccion=<?php echo $r->idDireccion ?>" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                        </td>
                        <td class="center">
                          <a onclick="eliminarDireccion(<?php echo $r->idDireccion;?>);" class="btn btn-danger btn-sm" href="#modalEliminar"  data-toggle="modal" data-target="#modalEliminar" role="button"><i class="fa fa-eraser"></i></a>
                        </td>

                      </tr>
                    </tr>

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
