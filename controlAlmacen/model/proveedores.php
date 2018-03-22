<?php
class Proveedores
{
    private $pdo;
    public $idProvedor;
    public $nombre;
    public $rfc;
    public $direccion;

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

        $stm = $this->pdo->prepare("SELECT * FROM proveedor");
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
   try 
   {
    $stm = $this->pdo
    ->prepare("SELECT * FROM proveedor WHERE idProvedor = ?");


    $stm->execute(array($id));
    return $stm->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) 
{
    die($e->getMessage());
}

}

public function Eliminar($id)
{

}

public function Actualizar($data)
{

}

public function Registrar(Proveedores $data)
{
    try 
    {
        $sql = "INSERT INTO proveedor (nombre,rfc,direccion) 
        VALUES (?,?,?)";

        $this->pdo->prepare($sql)
        ->execute(
            array(
                $data->nombre,
                $data->rfc, 
                $data->direccion
                )
            );
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }

}
}