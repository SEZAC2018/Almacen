<?php
class Partida
{
    private $pdo;
    public $idPartida;
    public $concepto;
    public $numeroPartida;

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

            $stm = $this->pdo->prepare("SELECT * FROM partida");
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

    public function Registrar(Alumno $data)
    {
          try 
        {
            $sql = "INSERT INTO partida (numeroPartida,concepto) 
            VALUES (?,?)";

            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->numeroPartida
                    $data->concepto
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        
    }
       
    }
}