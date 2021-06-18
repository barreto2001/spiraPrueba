<?php

    require_once '../../model/conexion/conexion.php';
    require_once '../../model/usuarios.php';

    $id = trim($_POST['id']);
    $resultado = null;
    $class = new Usuarios();
    $user = $class->getUserId($id);

    if (isset($user)) {
        $resultado = $user;
    } else {
        $resultado = 'No hay nada';
    }

    echo json_encode($resultado);
        
    

    
    

?>