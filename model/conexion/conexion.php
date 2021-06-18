<?php

class Conexion
{
    public function getConexion()
    {
        //Ubicación del host
        $host= "localhost";
        //Usuario de la base de datos
        $user = "root";
        //Contraseña de la base de dats
        $password = "";
        //Nombre de la base de datos
        $database = 'spiraprueba';

        $conexion = new PDO("mysql:host=$host;dbname=$database;utf8",$user,$password);

        return $conexion;
    }
}











?>