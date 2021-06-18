<?php
    session_start();
    if(!empty($_SESSION['auth']))
    {
        if ($_SESSION['rol'] != 2) {
            echo '<script>location.href="http://localhost/nn/"</script>';
        }
        
    }else{
        echo '<script>location.href="http://localhost/nn/"</script>';
    }

?>