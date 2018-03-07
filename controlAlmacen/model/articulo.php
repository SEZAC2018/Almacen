<?php
class Articulo
{
    private $pdo;
    public $idArticulo;
   
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
            ->prepare("SELECT * FROM articulos WHERE idArticulo = ?");


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

    public function Registrar(Alumno $data)
    {
       
    }
}