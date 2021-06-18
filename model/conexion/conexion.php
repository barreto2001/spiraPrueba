<?php

class Conexion
{
    public function getConexion()
    {
        $host= "localhost";
        $user = "root";
        $password = "";
        $database = 'spiraprueba';

        $conexion = new PDO("mysql:host=$host;dbname=$database;utf8",$user,$password);

        return $conexion;
    }
}











?>