<?php

    require_once '../../model/conexion/conexion.php';
    require_once '../../model/cursando.php';

    $id_curso = trim($_POST['curso']);
    $id_student = trim($_POST['id_student']);
    date_default_timezone_set("America/Bogota");
    $created_at = date("Y-m-d h:m:s");

    if (strlen($id_curso) > 0) {
            $class = new Cursando();
            $ver = $class -> verifyCursando($id_student,$id_curso);
        if ( $ver < 1) {
            
            $cursando =  $class -> create($id_student,$id_curso,$created_at);
    
            if ($cursando) {
                echo 'Exito';
            } else {
                echo 'Ha ocurrido un error';
            }
        } else {
            echo 'Este Usuario ya encuentra registrado en este curso';
        }
        
        

    } else {
        echo 'Por favor, escoja un curso';
    }
    

?>