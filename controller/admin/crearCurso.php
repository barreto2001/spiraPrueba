<?php

    require_once ('../../model/curso.php');
    require_once ('../../model/conexion/conexion.php');
    require_once ('../verificacionesBd.php');
    require_once ('../../model/verificacionesModel.php');
    require_once '../securityRols/admin.php';

    $titulo = trim($_POST['titulo']);
    $description = trim($_POST['description']);
    date_default_timezone_set("America/Bogota");
    $created_at = date("Y-m-d h:m:s");
    $user = $_SESSION['id'];
    $intesidad = trim($_POST['intensidad']);

    if (strlen($titulo) > 0) {
        if (verifyBdUnique('cursos','nombre',$titulo) ==  true) {
            if (strlen($description) > 0) {

                $class = new Curso();
                $result = $class-> create($titulo,$description,$intesidad,$created_at,$user);
                
                if ($result) {
                    echo 'Exito';
                } else {
                    echo 'Ha ocurrido un error';
                }

            } else {
                echo 'Por favor, ingrese una descripción';
            }
            
        } else {
            echo 'El título, ya se encunetra registrado';
        }
        
    } else {
        echo 'Por favor, ingrese un título';
    }
    



?>