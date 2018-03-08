<?php
require_once 'model/almacen.php';
// el  modelo  que  requires  debe  coincidir  con el controller
class AlmacenController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Almacen();
        //se mandaran llamar los  los modelos que utilizas
    }
    
    public function Index(){

        $page= 'view/almacenes/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
      $almacen = new Almacen();

      if(isset($_REQUEST['idAlmacen'])){
        $almacen = $this->model->Obtener($_REQUEST['idAlmacen']);
    }

    $page= 'view/almacenes/almacenes.php';
    require_once 'view/menu/index.php';
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