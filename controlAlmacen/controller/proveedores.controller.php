<?php
require_once 'model/proveedores.php';

class ProveedoresController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Proveedores();
    }
    
    public function Index(){

        $page= 'view/proveedores/index.php';
        require_once 'view/menu/index.php';
    }



    
    public function Crud(){
        $proveedores = new Proveedores();
      //echo "soy".$_REQUEST['idAlmacen'];
       if(isset($_REQUEST['idProvedor'])){
        $proveedores = $this->model->Obtener($_REQUEST['idProvedor']);
    }
    $page= 'view/proveedores/proveedores.php';
    require_once 'view/menu/index.php';
}

public function Guardar(){
    $proveedores = new Proveedores();
    $proveedores->idProvedor = $_REQUEST['idProvedor'];
    $proveedores->nombre = $_REQUEST['nombre'];
    $proveedores->rfc = $_REQUEST['rfc'];
    $proveedores->direccion = $_REQUEST['direccion'];


    $proveedores->idProvedor > 0 
    ? $this->model->Actualizar($proveedores)
    : $this->model->Registrar($proveedores);

    $page= 'view/proveedores/index.php';
    require_once 'view/menu/index.php';
}

public function Eliminar(){

}
}