<?php
class Direccion
{
    private $pdo;
    public $idDireccion;
    public $nombre;
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

            $stm = $this->pdo->prepare("SELECT * FROM direccion");
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
            ->prepare("SELECT * FROM direccion WHERE idDireccion = ?");


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

    public function Registrar(Direccion $data)
   echo "entre";
    {
        try 
        {
            $sql = "INSERT INTO direccion (nombre) 
            VALUES (?)";

            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->nombre
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}