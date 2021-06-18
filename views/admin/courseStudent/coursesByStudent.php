<?php
    require_once '../../../controller/securityRols/admin.php';
    require_once '../../../model/conexion/conexion.php';
    require_once '../../../model/cursando.php';
    require_once '../../../controller/admin/coursesController.php';
    require_once '../../../model/usuarios.php';
    require_once '../../../controller/admin/verUsuariosController.php';

    
   
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
    <link rel="stylesheet" href="../../../css/jquery-confirm.css">
 
</head>
<body>

    
    <header>
        <?php
            require_once '../components/navbarAdmin.php';
        ?>
    </header>
    

    <h2 class="ml-5 mt-5 mb-5" id="cursoDe"></h2>

    <div class="container w-75">
        <div class="row">
        <table class="table table-striped" id="courses">
            <thead>
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr style="display: none;">
                    <td class="title"></td>
                    <td></td>
                    <td></td>
                </tr>             
                <?php
                    echo coursesByStudent($_GET['student']);
                ?>
            </tbody>
        </table>
            
        </div>
    </div>


    <div class="container border mt-2">
        <div class="row">
            <form id="myForm"  class="form  w-25 m-5 col-md-6">
                <input type="hidden" id="id" value="<?php echo $_GET['student']?>">
                <div class="form-group">
                    <label for="">Curso</label>
                    <select  id="curso" class="form-control">
                        <option value="" class="" selected>Selecciones...</option>
                    </select>
                </div>
            </form>
            <div class="col-md-2 pt-5">
                <button onclick="agregarCursando()" class="btn btn-primary mt-4" >Agregar</button>
            </div>
        </div>
        
    </div>
    

    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../library/DataTables/datatables.js"></script>
    <script src="../../../library/jquery-confirm.js"></script>
    <script src="../../../js/admin/cursando/courseByStudent.js"></script>
</body>
</html>