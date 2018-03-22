<?php
class Usuarios
{
    private $pdo;
    public $idUsuario;
    public $nombreCompleto;
    public $apellido;
    public $nombreUsuario;
    public $contraseña;
    public $idDireccion;

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

            $stm = $this->pdo->prepare("select usuarios.*, direccion.nombre AS nombreDireccion from usuarios, direccion where usuarios.idDireccion = direccion.idDireccion");
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
        ->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");


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

public function Registrar(Usuarios $data)
{
 try 
 {
    $sql = "INSERT INTO usuarios (nombreCompleto,apellido,nombreUsuario,contraseña,idDireccion) 
    VALUES (?,?,?,?,?)";

    $this->pdo->prepare($sql)
    ->execute(
        array(
            $data->nombreCompleto,
            $data->apellido,
            $data->nombreUsuario,
            $data->contraseña,
            $data->idDireccion
            )
        );
} catch (Exception $e) 
{
    die($e->getMessage());
}

}
}