<?php
    require_once '../../model/conexion/conexion.php';
    require_once '../../model/cursando.php';

$id = trim($_POST['id']);

    
    if (strlen($id) > 0) {
        
        $class =  new Cursando();
        $consulta = $class->deleteCursando($id);

        if ($consulta == true) {
            echo "Exito";
        } else {
            echo "Hubo error";
        }
        
    } else {
        echo 'No se encuentra la inscripción';
    }


?>