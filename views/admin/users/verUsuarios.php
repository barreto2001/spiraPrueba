<?php
    require_once '../../../model/conexion/conexion.php';
    require_once '../../../model/usuarios.php';
    require_once '../../../controller/admin/verUsuariosController.php';
    require_once '../../../controller/securityRols/admin.php';
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuarios</title>
    <link rel="shortcut icon" href="../../../media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/sweetAlert/sweetalert2.min.css">
    <link rel="stylesheet" href="../../../library/DataTables/datatables.css">
 
</head>
<body>
    <?php
        require_once '../components/navbarAdmin.php';
    ?>
    <div class="container w-75 mt-5 mb-5">
        <div class="row">

            <h2 class="ml-5 col-md-6">Alumnos</h2>
            <a href="crear.php" class="col-md-5"><button class="btn btn-primary ">Crear</button></a>
            
        </div>
    </div>
    
    <div class="container w-75">
        <div class="row">
        <table class="table table-striped" id="students">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>             
                <?php
                    echo viewUser();
                ?>
            </tbody>
        </table>
            
        </div>
    </div>
    

    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../library/DataTables/datatables.js"></script>

    <script src="../../../js/verUsuarios.js"></script>
</body>
</html>