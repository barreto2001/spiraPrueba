<?php
    require_once '../../../model/conexion/conexion.php';
    require_once '../../../model/usuarios.php';
    require_once '../../../controller/admin/verUsuariosController.php';
    
    require_once '../../../controller/securityRols/admin.php';

    $id = $_GET["user"];

    $user = editUser($id);

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

    <h3 class="ml-5">Editar Usuario</h3>

    <form id="my-form-edit" class=" w-25 m-5">


    
        <input type="hidden" id="cosa" value="<?php echo $id ?>">

        <?php
        
            if ($user == 'No hay nada') {
                echo '<div class="alert alert-danger" role="alert">
                    No tiene usuarios
                </div>';
            } else {
                
                foreach($user as $key){

              
            
        
        ?>

        <div class="form-group">
            <label  class="">Nombre</label>
            <input  type="text" id="nombre" class="form-control editable" required value="<?php echo $key['nombre'] ?>">
        </div>

        <div class="form-group">
            <label  class="">Apellido</label>
            <input  type="text" id="apellido" class="form-control editable" required value="<?php echo $key['apellido'] ?>">
        </div>

        <div class="form-group">
            <label  class="">Telefono</label>
            <input  type="number" id="telefono" class="form-control editable" required value="<?php echo $key['telefono'] ?>">
        </div>

        <div class="form-group">
            <label  class="">Email</label>
            <input  type="email" id="email" class="form-control editable"  required value="<?php echo $key['email'] ?>">
        </div>
        
        <?php
              }

            }
        ?>

    </form>
        <p id="parrafo"></p>
        <p id="per"></p>
    <button class="btn btn-primary ml-5" onclick="editUser()" id="boton" disabled>Guardar</button>
    
    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script src="../../../library/jquery-confirm.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../js/editarUsuario.js"></script>
</body>
</html>