<?php
    require_once '../../model/conexion/conexion.php';
    require_once '../../model/curso.php';
    require_once '../securityRols/admin.php';

    $id = $_POST['id'];

    $resultado = null;
    $class = new Curso();
    $course = $class->getCourseId($id);

    if (isset($course)) {
        $resultado = array([
            "res" =>  "Exito",
            "content" => $course
        ]);
    } else {
        $resultado = array([
            "res" =>  "fail"
        ]);
    }

    echo json_encode($resultado) ;

?>