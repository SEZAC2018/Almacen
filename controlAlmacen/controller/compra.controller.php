<?php
require_once 'model/compra.php';

class CompraController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Compra();
    }
    
    public function Index(){
        
        $page= 'view/compra/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/compra/compra.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}