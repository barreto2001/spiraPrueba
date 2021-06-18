<?php
    require_once ('../../model/usuarios.php');
    require_once ('../../model/conexion/conexion.php');
    require_once ('../verificacionesBd.php');
    require_once ('../../model/verificacionesModel.php');
    require_once '../securityRols/admin.php';

    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellidos']);
    $cellphone = intval(trim($_POST['telefono']));
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $rol = 2;
    date_default_timezone_set("America/Bogota");
    $created_at = date("Y-m-d h:m:s");

    if(strlen($nombre) > 1)
    {
        if (strlen($apellido) > 1) {

            if (is_int($cellphone) && strlen($cellphone)>8 && $cellphone>0 ) {

                if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

                    if (verifyBdUnique('usuarios','telefono',$cellphone) == true) {

                        if (verifyBdUnique('usuarios','email',$email) == true) {

                            if (strlen($password) > 0) {
                                $pass = md5($password);
                                $classUser = new Usuarios();
                                $result = $classUser->create($nombre,$apellido,$cellphone,$email,$rol,$pass,$created_at);

                                if ($result) {
                                    echo 'Exito';
                                } else {
                                    echo 'Ha ocurrido un error';
                                }
                            } else {
                                echo 'Ingrese una contraseña';
                            }
                            
                            
                            
                        } else {
                            echo 'El email ya se encuentra registrado';
                        }
                        
                    } else {
                        echo 'El teléfono ya se encuentra registrado';
                    }  

                } else {
                    echo 'Por favor inngrese su email';
                }
                
            } else {
                echo 'El numero de teléfono ingresado no es valido';
            }
            
        } else {
            echo 'Por favor. ingrese sus apellidos';
        }
        
    }else{
        echo 'Por favor. ingrese su nombre';
    }


   
?>