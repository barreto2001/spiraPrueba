<?php

class Usuarios
{
    var $tabla;

    function __construct()
    {
        $this->tabla  = "usuarios";
    }

    public function create($nombre,$apellido,$telefono,$email,$rol,$pass,$created_at)
    {
        
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "INSERT INTO $this->tabla (nombre,apellido,telefono,email,created_at,password,rol) VALUES (:nombre,:apellido,:telefono,:email,:created_at,:password,:rol)";

        $result = $conexion->prepare($sql);

        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':apellido',$apellido);
        $result->bindParam(':telefono',$telefono);
        $result->bindParam(':email',$email);
        $result->bindParam(':created_at',$created_at);
        $result->bindParam(':password',$pass);
        $result->bindParam(':rol',$rol);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;

    }

    public function getUsers()
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT * FROM $this->tabla WHERE rol = 2";
        $result = $conexion->prepare($sql);
        $result->execute();

        while ($f=$result->fetch()) {
            $ready[] = $f;
        }
        
        return $ready;
    }

    public function getUserId($id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT nombre,apellido,email,telefono FROM $this->tabla WHERE id = :id";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id',$id);
        $result->execute();

        if ($f=$result->fetch()) {
            $ready[] = $f;
        }
        
        return $ready;
    }

    public function updateAllUser($nombre,$apellido,$email,$telefono,$id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "UPDATE $this->tabla SET nombre=:nombre,apellido=:apellido,telefono=:telefono,email=:email WHERE id =:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':apellido',$apellido);
        $result->bindParam(':telefono',$telefono);
        $result->bindParam(':email',$email);
        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function updateCellUser($nombre,$apellido,$telefono,$id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "UPDATE $this->tabla SET nombre=:nombre,apellido=:apellido,telefono=:telefono WHERE id =:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':apellido',$apellido);
        $result->bindParam(':telefono',$telefono);
        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function updateEmailUser($nombre,$apellido,$email,$id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "UPDATE $this->tabla SET nombre=:nombre,apellido=:apellido,email=:email WHERE id =:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':apellido',$apellido);
        $result->bindParam(':email',$email);
        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function updateNameUser($nombre,$apellido,$id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "UPDATE $this->tabla SET nombre=:nombre,apellido=:apellido WHERE id =:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':apellido',$apellido);
        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function deleteUser($id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "DELETE FROM $this->tabla WHERE id=:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function auth($email,$password)
    {
        
        $model = new Conexion();
        $conexion = $model->getConexion();

        $sql = "SELECT email, password FROM $this->tabla WHERE email = :email AND password = :password";
        $result = $conexion->prepare($sql);
        $result->bindParam(':email',$email);
        $result->bindParam(':password',$password);
        
        $result->execute();
        

        return $result->rowCount();
    }

    public function getUserEmail($email)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT * FROM $this->tabla WHERE email = :email";
        $result = $conexion->prepare($sql);
        $result->bindParam(':email',$email);
        $result->execute();

        while ($f=$result->fetch()) {
            $ready[] = $f;
        }
        
        return $ready;
    }
}


?>