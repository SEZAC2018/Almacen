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
       $page= 'view/articulo/articulo.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}