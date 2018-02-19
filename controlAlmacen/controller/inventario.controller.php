<?php
require_once 'model/inventario.php';

class InventarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new inventario();
    }
    
    public function Index(){
        
        $page= 'view/inventario/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/inventario/inventario.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}