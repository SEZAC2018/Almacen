
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Almacen SEZAC</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
    <link href="assets/plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
    <link href="assets/plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
    <!--link href="css/select2.css" rel="stylesheet"-->
    <link href="assets/plugins/bootstrap-editable/bootstrap-editable.css" rel="stylesheet">
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
    <link href="assets/plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/file-uploader/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="assets/plugins/file-uploader/css/jquery.fileupload.css">
    <link rel="stylesheet" href="assets/plugins/file-uploader/css/jquery.fileupload-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/plugins/select2/dist/css/select2.css">

    <!--Estilos Para radio buton y switch -->
    <link href="assets/plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/green.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">

    <!--Wizard  -->
    <link href="assets/plugins/wizard/css/smart_wizard.css" rel="stylesheet" type="text/css" />
    <!-- Optional SmartWizard theme -->
    <link href="assets/plugins/wizard/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
    <!-- Optional SmartWizard theme -->
    <link href="assets/plugins/wizard/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/wizard/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/wizard/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/calendar/fullcalendar.print.css" rel="stylesheet" type="text/css" />

  </head>
  <style type="text/css">
    .disabled {
      pointer-events:none; /*This makes it not clickable*/
      opacity:0.6;         /*This grays it out to look disabled*/
    }
    .lblheader{
      color:#2196F3;
    }
  </style>
  <body class="light_theme  fixed_header left_nav_fixed" style="background-color: #EEEEEE" >
    <div class="wrapper">
      <!--\\\\\\\ wrapper Start \\\\\\-->
      <div class="header_bar">
        <!--\\\\\\\ header Start \\\\\\-->
        <div class="brand">
          <!--\\\\\\\ brand Start \\\\\\-->
          <!--div class="logo" style="display:block"><h2 style="margin-top: -5px;"><span class="theme_color">INSEZAC</span></h2></div-->
          <div style="display:block"><img width="100%" style=" margin-top:-15px" src="assets/images/sezac.png"></div>

          <div class="small_logo" style="display:none"><img src="assets/images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="assets/images/r-logo.png" width="122" height="20" alt="r-logo" /></div>

        </div>
        <!--\\\\\\\ brand end \\\\\\-->
        <div class="header_top_bar">
          <!--\\\\\\\ header top bar start \\\\\\-->
          <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
          <div class="top_left_bar">
            <h1>Control Almacen</h1>
          </div>
          <div class="top_right_bar">
            <div style="margin-top: -33%;">
              <span class="user_adminname">Hola </span>
              <span class="user_adminname"><a href="?c=Login&a=Index"><i class="fa fa-power-off"></i> Salir</span></a>
            </div>
          </div>
        </div>
        <!--\\\\\\\ header top bar end \\\\\\-->
      </div>
      <!--\\\\\\\ header end \\\\\\-->
      <div class="inner">
        <!--\\\\\\\ inner start \\\\\\-->
        <div class="left_nav">
          <!--\\\\\\\left_nav start \\\\\\-->
          <br>
          <div class="left_nav_slidebar">
           <ul>
            <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> Almacen <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
              <ul class="opened" style="display:block">


               <li> <a href="?c=Articulo"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Articulos</b> </a> </li>

               <li> <a href="?c=Proveedores"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Proveedores</b> </a> </li>

               <li> <a href="?c=Usuarios"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Usuarios</b> </a> </li>

               <li> <a href="?c=Almacen"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Almacenes</b> </a> </li>

               <li> <a href="?c=Solicitud"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Solicitudes</b> </a> </li>

               <li> <a href="?c=Partida"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Partidas</b> </a> </li>

               <li> <a href="?c=Inventario"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inventario</b> </a> </li>

               <li> <a href="?c=Calendario"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendario</b> </a> </li>

               <li> <a href="?c=Direccion"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Departamento</b> </a> </li>

             </ul>
           </li>
         </ul>

       </div>
     </div>
   </div>
   <!--\\\\\\\left_nav end \\\\\\-->
   <div class="contentpanel">
    <!--\\\\\\\ contentpanel start\\\\\\-->

    <?php include($page); ?>

  </div>
  <!--\\\\\\\ content panel end \\\\\\-->
</div>
<!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<script src="assets/js/jquery-2.1.0.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/common-script.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript"  src="assets/plugins/toggle-switch/toggles.min.js"></script>
<script src="assets/plugins/checkbox/zepto.js"></script>
<script src="assets/plugins/checkbox/icheck.js"></script>
<script src="assets/js/icheck-init.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/js/form-components.js"></script>
<script type="text/javascript"  src="assets/plugins/input-mask/jquery.inputmask.min.js"></script>
<script type="text/javascript"  src="assets/plugins/input-mask/demo-mask.js"></script>
<script type="text/javascript"  src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript"  src="assets/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/js/jPushMenu.js"></script>
<script src="assets/plugins/validation/parsley.min.js"></script>
<script src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="assets/plugins/data-tables/dynamic_table_init.js"></script>
<script src="assets/plugins/edit-table/edit-table.js"></script>
<script src="assets/plugins/file-uploader/js/vendor/jquery.ui.widget.js"></script>
<script src="assets/plugins/file-uploader/js/jquery.iframe-transport.js"></script>
<script src="assets/plugins/file-uploader/js/jquery.fileupload.js"></script>
<script src="assets/plugins/validation/parsley.min.js"></script>
<script src="assets/plugins/select2/dist/js/select2.full.min.js"></script>

<script src="assets/plugins/calendar/fullcalendar.min.js"></script>
<script src="assets/plugins/calendar/external-draging-calendar.js"></script>
<script src="assets/js/jquery-ui.custom.min.js"></script>
<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript" src="assets/plugins/wizard/js/jquery.smartWizard.js"></script>
<!-- Include jQuery Validator plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


</body>
</html>
