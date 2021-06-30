//obtener cursos

$(document).ready(function () {

    //Obtener nombre del estudiante
    $.ajax({
        type: 'POST',
        url: '../../../controller/admin/viewNombreUser.php',
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
        url: '../../../controller/admin/verCursosAjax.php'
    })
    .done(respuesta => {
        console.log(respuesta);
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





//Agregar Cursos
function agregarCursando() {
    var curso = $("#curso").val();
    var id = $("#id").val();
    var ok = true;
    var title = document.getElementsByClassName('title');

    

    if (curso != "") {
        $.ajax({
            type : 'POST',
            url : '../../../controller/admin/crearCursando.php',
            data :{
                'curso' : curso,
                'id_student' : id
            }
        })
        .done( respuesta => {
            if (respuesta == "Exito") {
                $.confirm({
                    icon: 'bi bi-wrench',
                    title: 'Bien',
                    content: 'Ha sido agregado con exito',
                    buttons:{
                        Ok:{ 
                            action: function (){
                                window.location.reload();
                            },
                            btnClass : 'btn-blue',
    
                        }
                    }
                })
            } else {
                swal.fire({
                    icon : 'error',
                    title : 'Ups...',
                    text : respuesta
                })
            }
        })
    } else {
       swal.fire({
           icon: 'error',
           title: 'Ups...',
           text: 'Debe escoger una opción'
       }) 
    }
}


function eliminarCursando(element){

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
                url:'../../../controller/admin/eliminarCursando.php',
                data : {
                    'id' : element.id
                }
            })
            .done(function (respuesta) {
                if (respuesta =='Exito') {
                    $.confirm({
                        icon: 'bi bi-wrench',
                        title: 'El curso ha sido eliminado',
                        content: respuesta,
                        buttons:{
                            Ok:{ 
                                action: function (){
                                    window.location.reload();
                                },
                                btnClass : 'btn-blue',
        
                            }
                        }
                    });
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
