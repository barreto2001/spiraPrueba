<?php

    require_once '../../../controller/securityRols/admin.php';

    $id = $_GET["curso"];

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../../../media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-confirm.css">
    <link rel="stylesheet" href="../../../library/sweetAlert/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

    <?php
        require_once '../components/navbarAdmin.php';
    ?>

    <h3 class="ml-5">Editar Curso</h3>

    <form id="my-form-edit" class=" w-25 m-5">

        <input type="hidden" id="id">
        
        <div class="form-group">
            <label for="">T&iacute;tulo</label>
            <input class="form-control editable" type="text" name="titulo" id="titulo" required placeholder="Escriba el título..." required>
        </div>

        <div class="form-group">
            <label for="" class="">Descripci&oacute;n</label>
            <textarea name="description" id="description" class="form-control editable" cols="30" rows="10" placeholder="Descripción" required></textarea>
            
        </div>

        <div class="form-group">
            <label for="">Intensidad Horaria</label>
            <input class="form-control" min="1" type="number" name="intensidad" id="intensidad" required placeholder="Escriba la cantidad de horas..." required>
        </div>

    </form>
        <p id="parrafo"></p>
        <p id="per"></p>
    <button class="btn btn-primary ml-5" onclick="editCourse()" id="boton" >Guardar</button>
    
    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script src="../../../library/jquery-confirm.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../js/admin/course/update.js"></script>
</body>
</html>