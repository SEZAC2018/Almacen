<?php
require_once 'model/partida.php';

class PartidaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Partida();
    }
    
    public function Index(){
        
        $page= 'view/partida/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/partida/partida.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}