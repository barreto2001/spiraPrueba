<?php

class verifyModel
{
    

    public function verifyUnique($tabla,$columna,$registro)
    {
        $exit = null;
        $model = new Conexion();
        $conexion = $model->getConexion();

        $sql = "SELECT $columna  FROM $tabla WHERE $columna = :registro";
        $result = $conexion->prepare($sql);
        $result->bindParam(':registro',$registro);
        
        $result->execute();
        

        return $result->rowCount();
    }
}

?>