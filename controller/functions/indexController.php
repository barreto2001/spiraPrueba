<?php

    function authRols()
    {
        session_start();

        if(!empty($_SESSION['auth']))
        {
            $route = routesRols($_SESSION['rol']);
            echo "<script>window.location.href ='".$route."'</script>";
            
        }
    }

?>