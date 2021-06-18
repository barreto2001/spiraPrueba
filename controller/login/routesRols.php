<?php

    function routesRols($rol)
    {

        $result = null;

        switch ($rol) {
            case 1:
                $result = 'views/admin/users/verUsuarios.php';
                break;
            
            case 2:
                $result = 'views/student/verCursos.php';
                break;
                
            default:
                $result = 'http://localhost/nn/';
                break;
        }

        return $result;
    }

?>