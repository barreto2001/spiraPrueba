<?php

    function routesRols($rol)
    {

        $result = null;
        $host = 'http://localhost/spiraPrueba/';
        

        switch ($rol) {
            case 1:
                $result = 'views/admin/users/verUsuarios.php';
                break;
            
            case 2:
                $result = 'views/student/verCursos.php';
                break;
                
            default:
                $result = $host;
                break;
        }

        return $result;
    }

?>