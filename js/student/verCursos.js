$(document).ready(function () {

    //Obtener nombre del estudiante
    $.ajax({
        type: 'POST',
        url: '../../controller/admin/viewNombreUser.php',
        data : {
            'id' : $("#id").val()
        }
    }).done(respuesta => {
        respuesta = JSON.parse(respuesta);
        document.getElementById('cursoDe').innerHTML ='Cursos de '+ respuesta[0].nombre + ' ' + respuesta[0].apellido;
        
    })

    //--------------------------------
    
    $.ajax({
        type: 'POST',
        url: '../../controller/admin/verCursos.php'
    })
    .done(respuesta => {
    
        cursos = JSON.parse(respuesta);
    
        if (cursos[0].control == 'Exito') {
    
            curso = cursos[0].content;
            //Obtenemos los cursos en lo que ya esta inscrito
            title = document.getElementsByClassName('title');
           
            //Mapeamos los cursos
            curso.map( e =>{    
                document.getElementById('curso').innerHTML += '<option class="optionCUrso" value="'+e.id+'">'+e.nombre+'</option>';
                
            })
            
        }
    })

    $('#courses').DataTable({
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
})