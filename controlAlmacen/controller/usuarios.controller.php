<?php
require_once 'model/usuarios.php';
require_once 'model/direccion.php';

class UsuariosController{
    
    private $model;
    private $model1;
    
    public function __CONSTRUCT(){
        $this->model = new Usuarios();
        $this->model1 = new Direccion();
    }
    
    public function Index(){
        
        $page= 'view/usuarios/index.php';
        require_once 'view/menu/index.php';
    }



    
    public function Crud(){
        $usuarios = new Usuarios();
      //echo "soy".$_REQUEST['idAlmacen'];
      if(isset($_REQUEST['idUsuario'])){
        $direccion = $this->model->Obtener($_REQUEST['idUsuario']);
    }

    $page= 'view/usuarios/usuarios.php';
    require_once 'view/menu/index.php';
    }

    
    public function Guardar(){
         $usuarios = new Usuarios();

        $usuarios->idUsuario = $_REQUEST['idUsuario'];

        $usuarios->nombreCompleto = $_REQUEST['nombreCompleto'];
        $usuarios->apellido = $_REQUEST['apellido'];
        $usuarios->nombreUsuario = $_REQUEST['nombreUsuario'];
        $usuarios->contraseña = $_REQUEST['contraseña'];
        $usuarios->idDireccion = $_REQUEST['idDireccion'];
        

        $usuarios->idUsuario > 0 
        ? $this->model->Actualizar($usuarios)
        : $this->model->Registrar($usuarios);

        $page= 'view/usuarios/index.php';
        require_once 'view/menu/index.php';
       
    }
    
    public function Eliminar(){
       
    }
}