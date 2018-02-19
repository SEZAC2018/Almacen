<?php
require_once 'model/inventario.php';

class ProveedorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new calendario();
    }
    
    public function Index(){
        
        $page= 'view/inventario/index.php';
        require_once 'view/menu/index.php';
    }



    
    public function Crud(){
       $page= 'view/inventario/calendario.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}