<?php

    require_once '../../model/conexion/conexion.php';
    require_once '../../model/usuarios.php';
    require_once 'routesRols.php';

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (strlen($email)>0 && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        if (strlen($password) > 0) {
            $class = new Usuarios();
            $auth = $class -> auth($email,md5($password));

            if ($auth > 0) {

                $class = new Usuarios();

                $infoSession = $class -> getUserEmail($email);

                foreach ($infoSession as $key) {
                    session_start();
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $key['id'];
                    $_SESSION['nombre'] = $key['nombre'];
                    $_SESSION['apellido'] = $key['apellido'];
                    $_SESSION['telefono'] = $key['telefono'];
                    $_SESSION['email'] = $key['email'];
                    $_SESSION['rol'] = $key['rol'];
                }

                $res = array([
                    "com" => 'Exito',
                    "route" => routesRols($_SESSION['rol'])
                ]);

                
            } else {
                $res = array([
                    "com" => 'email o contraseña incorrectos'
                ]);
                
                
            }
            
        } else {

            $res = array([
                "com" => 'Por ingrese la contraseña'
            ]);
        }
        
    } else {

        $res = array([
            "com" => 'Por favor, ingrese el email'
        ]);
    }
    
    echo json_encode($res);
?>