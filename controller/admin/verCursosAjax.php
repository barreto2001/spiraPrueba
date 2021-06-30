<?php
    require_once '../securityRols/admin.php';
    require_once '../../model/conexion/conexion.php';
    require_once '../../model/curso.php';
    

    
    $class =  new Curso();

    $cursos = $class -> getCourse();

    $res = null;

    if (isset($cursos)) {
        $res = array([
            "control" => 'Exito',
            "content" => $cursos
        ]);
    } else {
        $res = array([
        "control" => 'Fail',
        "content" => ''
        ]);
    }
    
    echo  json_encode($res);
  

    

    
                
    

?>