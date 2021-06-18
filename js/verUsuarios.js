$(document).ready( function () {
    //PAginación y filtros de tablas hechas con 
    $('#students').DataTable({
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
} );


function eliminarUser(element){

    Swal.fire({
        title: 'Seguro de eliminar?',
        showDenyButton: true,
        showCancelButton:false,
        confirmButtonText: `Eliminar`,
        denyButtonText: `No, gracias`,
        confirmButtonColor : '#9f0a18',
        denyButtonColor : '#0a9f25'
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                url:'../../../controller/admin/eliminarUserController.php',
                data : {
                    'id' : element.id
                }
            })
            .done(function (respuesta) {
                if (respuesta =='Exito') {
                    Swal.fire({
                        icon:'success',
                        title : 'Excelente',
                        text : 'El usuario ha sido eliminado'
                    }) ;
                    window.location.reload();
                } else {
                    Swal.fire({
                        icon:'Error',
                        title : 'Ups...!',
                        text : respuesta
                    }) ;
                }
                
                
            })
            .fail(function () {
                alert('oh no');
            })
        } else if (result.isDenied) {
          
        }
      })

    
}