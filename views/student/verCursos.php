<?php
    require_once '../../controller/securityRols/estudent.php';
    require_once '../../model/conexion/conexion.php';
    require_once '../../model/cursando.php';
    require_once '../../controller/student/verCursos.php';
    require_once '../../model/usuarios.php';

    
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuarios</title>
    <link rel="shortcut icon" href="../../media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../library/sweetAlert/sweetalert2.min.css">
    <link rel="stylesheet" href="../../library/DataTables/datatables.css">
    <link rel="stylesheet" href="../../css/jquery-confirm.css">
 
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../controller/login/logOut.php">Cerrar Sesi&oacute;n</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    
    

    <h2 class="ml-5 mt-5 mb-5" id="cursoDe"></h2>

    <div class="container w-75">
        <div class="row">
        <table class="table table-striped" id="courses">
            <thead>
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha de inscripci&oacute;n</th>
                </tr>
            </thead>
            <tbody>
                <tr style="display: none;">
                    <td class="title"></td>
                    <td></td>
                    <td></td>
                </tr>             
                <?php
                    echo coursesByStudentP($_SESSION['id']);
                ?>
            </tbody>
        </table>
            
        </div>
    </div>

    <form>
        <input type="hidden" id="id" value="<?php echo $_SESSION['id']?>">
    </form>


    
    

    <script src="../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../library/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../library/DataTables/datatables.js"></script>
    <script src="../../library/jquery-confirm.js"></script>
    <script src="../../js/student/verCursos.js"></script>
</body>
</html>