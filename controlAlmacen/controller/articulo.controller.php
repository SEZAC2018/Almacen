<?php
require_once 'model/articulo.php';
require_once 'model/partida.php';
require_once 'model/almacen.php';


class ArticuloController{

    private $model;
    private $model1;
    private $model2;
    
    public function __CONSTRUCT(){
        $this->model = new Articulo();
        $this->model1 = new Partida();
        $this->model2 = new Almacen();
    }
    
    public function Index(){

        $page= 'view/articulo/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
        $articulo = new Articulo();
      //echo "soy".$_REQUEST['idAlmacen'];
      if(isset($_REQUEST['idArticulo'])){
        $articulo = $this->model->Obtener($_REQUEST['idArticulo']);
    }

    $page= 'view/articulo/articulo.php';
    require_once 'view/menu/index.php';
    }

    public function Guardar(){
        $articulo = new Articulo();

        $articulo->idArticulo = $_REQUEST['idArticulo'];

        $articulo->nombre = $_REQUEST['nombre'];
        $articulo->cantidad = $_REQUEST['cantidad'];
        $articulo->idAlmacen = $_REQUEST['idAlmacen'];
        $articulo->unidadMedidad = $_REQUEST['unidadMedidad'];
        $articulo->fechaCaducidad = $_REQUEST['fechaCaducidad'];
        $articulo->tipoArticulo = $_REQUEST['tipoArticulo'];
        $articulo->idPartida = $_REQUEST['idPartida'];

        $articulo->idArticulo > 0 
        ? $this->model->Actualizar($articulo)
        : $this->model->Registrar($articulo);

        $page= 'view/articulo/index.php';
        require_once 'view/menu/index.php';

    }

    public function Eliminar(){

    }
}
