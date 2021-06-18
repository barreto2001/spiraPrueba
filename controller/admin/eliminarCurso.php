<?php

    require_once '../../model/conexion/conexion.php';
    require_once '../../model/curso.php';
    require_once '../securityRols/admin.php';

    $id = $_POST["id"];

    if (strlen($id) > 0) {
        $class = new Curso();
        $consulta = $class->deleteCourse($id);

        if ($consulta == true) {
            echo "Exito";
        } else {
            echo "Hubo error";
        }
        
    } else {
        echo 'No se encuentra el curso';
    }
    

    


?>