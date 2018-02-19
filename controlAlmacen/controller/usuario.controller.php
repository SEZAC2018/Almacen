<?php
require_once 'model/usuarios.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        
        $page= 'view/usuarios/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Crud(){
       $page= 'view/usuarios/usuarios.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
       
    }
    
    public function Eliminar(){
       
    }
}