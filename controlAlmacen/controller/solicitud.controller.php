<?php
require_once 'model/solicitud.php';

class SolicitudController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new solicitud();
    }
    
    public function Index(){
        
        $page= 'view/solicitud/index.php';
        require_once 'view/menu/index.php';
    }



    
    public function Crud(){
       $page= 'view/solicitud/solicitud.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}