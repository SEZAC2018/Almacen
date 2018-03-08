<?php
require_once 'model/articulo.php';

class ArticuloController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Articulo();
    }
    
    public function Index(){

        $page= 'view/articulo/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
      
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


