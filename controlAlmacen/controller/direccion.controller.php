<?php
require_once 'model/direccion.php';
// el  modelo  que  requires  debe  coincidir  con el controller
class DireccionController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Direccion();
        //se mandaran llamar los  los modelos que utilizas
    }
    
    public function Index(){

        $page= 'view/direccion/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
      $direccion = new Direccion();
      //echo "soy".$_REQUEST['idAlmacen'];
      if(isset($_REQUEST['idDireccion'])){
        $direccion = $this->model->Obtener($_REQUEST['idDireccion']);
    }

    $page= 'view/direccion/direccion.php';
    require_once 'view/menu/index.php';
}

public function Guardar()
{
    $direccion = new Direccion();
    $direccion->idDireccion = $_REQUEST['idDireccion'];
    $direccion->nombre = $_REQUEST['nombre'];

    
    $almacen->idDireccion > 0 
    ? $this->model->Actualizar($direccion)
    : $this->model->Registrar($direccion);

    $page= 'view/almacenes/index.php';
    require_once 'view/menu/index.php';
}


public function Eliminar(){

}
}