<?php
class Calendario
{
    private $pdo;
    
   
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
       
    }
}