<?php
require_once 'model/calendario.php';

class CalendarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Calendario();
    }
    
    public function Index(){
        
        $page= 'view/calendario/index.php';
        require_once 'view/menu/index.php';
    }



    
    public function Crud(){
       $page= 'view/calendario/calendario.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}