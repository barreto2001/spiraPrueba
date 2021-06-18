<?php
    session_start();
    if(!empty($_SESSION['auth']))
    {
        if ($_SESSION['rol'] != 1) {
            echo '<script>location.href="http://localhost/spiraPrueba/"</script>';
        }
        
    }else{
        echo '<script>location.href="http://localhost/spiraPrueba/"</script>';
    }

?>