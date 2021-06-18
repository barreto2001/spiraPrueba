<?php

 require_once '../model/conexion/conexion.php';
 require_once '../model/verificacionesModel.php';
 require_once '../model/usuarios.php';
 require_once 'verificacionesBd.php';

 $nombre = trim($_POST["nombre"]);
 $apellido = trim($_POST["apellido"]);
 $email = trim($_POST["email"]);
 $telefono = trim($_POST["telefono"]);
 $id = trim($_POST["id"]);

 if(strlen($nombre) > 1)
    {
        if (strlen($apellido) > 1) {

            if (strlen($telefono)>8 && $telefono>0 ) {

                if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

                    $consulta = new Usuarios();

                    if (verifyBdUnique('usuarios','telefono',$telefono) == true) {
                        
                        if (verifyBdUnique('usuarios','email',$email) == true) {
                            $update = $consulta -> updateAllUser($nombre,$apellido,$email,$telefono,$id);
                        } else{
                            $update = $consulta -> updateCellUser($nombre,$apellido,$telefono,$id);
                        }
                        
                    } else {
                        if (verifyBdUnique('usuarios','email',$email) == true) {
                            
                            $update = $consulta -> updateEmailUser($nombre,$apellido,$email,$id);
                           
                        } else {
                            $update = $consulta -> updateNameUser($nombre,$apellido,$id);
                        }
                    }  

                    if ($update == true) {
                        echo 'La actualización de los datos se ha realizado my perris';
                    } else {
                        echo 'fail';
                    }
                    

                } else {
                    echo 'Consifgase un email';
                }
                
            } else {
                echo 'El numero ingresado no es valido';
            }
            
        } else {
            echo 'Papi es que usted no tiene apellido';
        }
        
    }else{
        echo 'Papi es que usted no tiene nombre';
    }

?>