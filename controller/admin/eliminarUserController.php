<?php

    require_once '../model/conexion/conexion.php';
    require_once '../model/usuarios.php';

    $id = $_POST["id"];

    if (strlen($id) > 0) {
        $class = new Usuarios();
        $consulta = $class->deleteUser($id);

        if ($consulta == true) {
            echo "Exito";
        } else {
            echo "Hubo error, por loca";
        }
        
    } else {
        echo 'Mijito y el id que?';
    }
    

    


?>