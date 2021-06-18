<?php
    
    require_once '../../../controller/securityRols/admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="shortcut icon" href="../../../media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/sweetAlert/sweetalert2.min.css">
</head>
<body>

    <?php 
        require_once '../components/navbarAdmin.php';
    ?>
    
    <h2 class="ml-5 mt-5">Crea un nuevo curso</h2>

    <form  class="form  w-25 m-5" id="myForm">

        <div class="form-group">
            <label for="">T&iacute;tulo</label>
            <input class="form-control" type="text" name="titulo" id="titulo" required placeholder="Escriba el título..." required>
        </div>

        <div class="form-group">
            <label for="" class="">Descripci&oacute;n</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Descripción" required></textarea>
            
        </div>
        
    </form>

        <button onclick="crearCurso()" class="btn btn-primary ml-5">Guardar</button>



    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../js/admin/course/create.js"></script>
</body>
</html>