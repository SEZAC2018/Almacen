<?php
class Articulo
{
    private $pdo;
    public $idArticulo;
    public $nombre;
    public $cantidad;
    public $idAlmacen;
    public $unidadMedidad;
    public $fechaCaducidad;
    public $tipoArticulo;
    public $idPartida;


    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();     
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT  articulos.*, almacen.nombre as nomAlmacen, partida.concepto  FROM articulos, almacen, partida where articulos.idPartida = partida.idPartida AND articulos.idAlmacen =  almacen.idAlmacen;");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function Obtener($id)
    {
       
    }

    public function Eliminar($id)
    {

    }

    public function Actualizar($data)
    {

    }

    public function Registrar(Articulo $data)
    {
}

}