<?php
require_once 'model/almacenes.php';

class AlmacenController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Almacen();
    }
    
    public function Index(){
        
        $page= 'view/almacenes/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/almacenes/almacenes.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}