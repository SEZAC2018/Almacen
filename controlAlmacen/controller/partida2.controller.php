<?php
require_once 'model/partida2.php';

class Partida2Controller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Partida2();
    }
    
    public function Index(){
        
        $page= 'view/partida2/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/partida2/partida2.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}