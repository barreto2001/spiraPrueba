<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cursos</title>
    <link rel="shortcut icon" href="../../../media/animal-2028258_1280.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/sweetAlert/sweetalert2.min.css">
    
    <link rel="stylesheet" href="../../../library/DataTables/datatables.css">
    <link rel="stylesheet" href="../../../css/jquery-confirm.css">
    
 
</head>
<body>
    <?php
        require_once '../components/navbarAdmin.php';
    ?>

<div class="container w-75 mt-5 mb-5">
        <div class="row">

            <h2 class="ml-5 col-md-6">Cursos</h2>
            <a href="create.php" class="col-md-5"><button class="btn btn-primary ">Crear</button></a>
            
        </div>
    </div>
    
    <div class="container w-75">
        <div class="row">
        <table class="table table-striped" id="cursos" >
            <thead>
                <tr>
                    <th scope="col">T&iacute;tulo</th>
                    <th scope="col">Descripci&oacute;n</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody id="contenidoTabla">             
                
            </tbody>
        </table>
            
            <div id="alert"></div>
        </div>
    </div>
    


    <script src="../../../library/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../library/sweetAlert/sweetalert2.min.js"></script>
    <script src="../../../library/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../library/DataTables/datatables.js"></script>
    <script src="../../../library/jquery-confirm.js"></script>
    <script src="../../../js/admin/course/read.js"></script>
    <script >
        $('#cursos').DataTable({
            
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        }); 
        
        $("#cursos").dataTable().reinitialise();
        
    </script>
</body>
</html>