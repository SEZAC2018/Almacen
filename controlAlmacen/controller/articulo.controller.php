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
        $articulo = new Articulo();

      if(isset($_REQUEST['idArticulo'])){
        $almacen = $this->model->Obtener($_REQUEST['idArticulo']);
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

    $articulo->unidad = $_REQUEST['cantidad'];
    $articulo->idArticulo > 0 
    ? $this->model->Actualizar($articulo)
    : $this->model->Registrar($articulo);

    $page= 'view/articuloindex.php';
    require_once 'view/menu/index.php';
       
    }
    
    public function Eliminar(){
       
    }
}


    
}

public function Guardar(){

    $almacen = new Almacen();

    $almacen->idAlmacen = $_REQUEST['idAlmacen'];

    $almacen->nombre = $_REQUEST['nombre'];
    $almacen->idAlmacen > 0 
    ? $this->model->Actualizar($almacen)
    : $this->model->Registrar($almacen);

    $page= 'view/almacenes/index.php';
    require_once 'view/menu/index.php';
}



public function Eliminar(){

}
}