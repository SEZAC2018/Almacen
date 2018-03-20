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
       $page= 'view/proveedores/proveedores.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}