<?php
    require_once '../securityRols/admin.php';
    require_once '../../model/conexion/conexion.php';
    require_once '../../model/curso.php';
    require_once '../verificacionesBd.php';
    require_once '../../model/verificacionesModel.php';

    $titulo = trim($_POST['titulo']);
    $description = trim($_POST['description']);
    $id = trim($_POST['id']);
    date_default_timezone_set("America/Bogota");
    $updated_at = date("Y-m-d h:m:s");
    $user_updated = $_SESSION['id'];
    $intensidad =  trim($_POST['intensidad']);

    $respuestaBack = null;

    if (strlen($titulo) > 0) {
        if (verifyBdUnique('cursos','nombre',$titulo) == true) {
            if (strlen($description) > 0) {
                $class = new Curso();
                $editCurso = $class-> updatedAll($titulo,$description,$intensidad,$updated_at,$user_updated,$id);

                $respuestaBack = array([
                    "res" => 'Exito',
                    "fail" => 'Todos los datos han sido actualizado'
                ]);

            } else {
                $respuestaBack = array([
                    "res" => 'fail',
                    "fail" => 'Por favor, ingrese una descripción'
                ]);
            }
            
        } else {
            if (strlen($description) > 0) {
                
                $class = new Curso();
                $editCurso = $class-> updatedDescription($description,$intensidad,$updated_at,$user_updated,$id);

                $respuestaBack = array([
                    "res" => 'Exito',
                    "fail" => 'El titulo ya se encuentra registrado, sin embargo la descripción y la intensidad horaria se actualizo'
                ]);
            } else {
                $respuestaBack = array([
                    "res" => 'fail',
                    "fail" => 'El titulo ya se encuentra registrado y dejo en blanco la descripción'
                ]);
            }
            
        }
    } else {
        $respuestaBack = array([
            "res" => 'fail',
            "fail" => 'Por favor Ingrese un Titulo'
        ]);
    }

    echo json_encode($respuestaBack);
    

    
    



?>