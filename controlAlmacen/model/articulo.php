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

        $stm = $this->pdo->prepare("SELECT * FROM articulos");
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
        ->prepare("SELECT * FROM  articulos WHERE idArticulo = ?");
        

        $stm->execute(array($id));
        return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }
    
}

public function Eliminar($id)
{
    try 
    {
        $stm = $this->pdo
        ->prepare("DELETE FROM articulos WHERE idArticulo = ?");                    

        $stm->execute(array($id));
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }   
}

public function Actualizar($data)
{
 
}

public function Registrar(Articulo $data)
{
   try 
   {
    $sql = "INSERT INTO articulo (nombre) 
    VALUES (?)";

    $this->pdo->prepare($sql)
    ->execute(
        array(
            $data->nombre
            $data->nombre
            $data->nombre
            $data->nombre
            $data->nombre
            $data->nombre
            $data->nombre
            $data->nombre
            )
        );
} catch (Exception $e) 
{
    die($e->getMessage());
}

}
}