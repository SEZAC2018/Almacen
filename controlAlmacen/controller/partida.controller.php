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
         $partida = new Partida();
      //echo "soy".$_REQUEST['idAlmacen'];
      if(isset($_REQUEST['idPartida'])){
        $partida = $this->model->Obtener($_REQUEST['idPartida']);
    }
       $page= 'view/partida/partida.php';
        require_once 'view/menu/index.php';
    }
    
    public function Guardar(){
        $partida = new Partida();

        $partida->idpartida = $_REQUEST['idPartida'];

        $partida->concepto = $_REQUEST['concepto'];
        $partida->numeroPartida = $_REQUEST['numeroPartida'];
       
        $articulo->idArticulo > 0 
        ? $this->model->Actualizar($partida)
        : $this->model->Registrar($partida);

        $page= 'view/partida/index.php';
        require_once 'view/menu/index.php';
    }
    
    public function Eliminar(){
       
    }
}