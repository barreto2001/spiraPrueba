$(document).ready( function () {
    //PAginación y filtros de tablas hechas con 
    $('#students').DataTable();
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
                        text : 'El usuario se jue'
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