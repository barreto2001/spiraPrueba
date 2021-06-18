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
    
    <h2>Crea un nuevo un usuario</h2>

    <form  class="form  w-25 m-5" id="myForm">

        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Nombre...">
        </div>

        <div class="form-group">
            <label for="" class="">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" minlength="2" required placeholder="Apellido...">
        </div>

        <div class="form-group">
            <label for="" class="">Telefono</label>
            <input class="form-control" type="number" name="telefono" id="telefono"    required placeholder="Telefono...">
        </div>
        
        <div class="form-group">
            <label for="" class="">Correo electronico</label>
            <input class="form-control" type="email" name="email" id="email" required placeholder="E-mail">
        </div>

        <div class="form-group">
            <label for="" class="">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" required placeholder="Contraseña...">
        </div>
    
        
    </form>

        <button onclick="enviarCrear()" class="btn btn-primary ml-5">Guardar</button>



    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../js/crear.js"></script>
</body>
</html>