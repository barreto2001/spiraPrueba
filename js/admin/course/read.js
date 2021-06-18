$(document).ready( function () {

     

    $.ajax({
        type: 'POST',
        url: '../../../controller/admin/verCursos.php'
    })
    .done(respuesta => {

        cursos = JSON.parse(respuesta);

        if (cursos[0].control == 'Exito') {

            curso = cursos[0].content;
            content = '';
            tbody = document.getElementById('contenidoTabla');
            

            curso.map( e => {
                
                
                content += `
                <tr>
                    <th>`+e.nombre+`</th>
                    <th>
                        <textarea name="" id="" cols="36" rows="6" class="w-100">`+e.description+`</textarea>
                    </th>
                        <th><a href="update.php?curso=`+e.id+`"><button class="btn btn-primary">Editar</button></a>
                    </th>
                        
                    <th>
                        <button class="btn btn-danger" onclick="eliminarCourse(this)" id="`+e.id+`">Eliminar</button>
                    </th>
                </tr>
                
                `;
                
                tbody.innerHTML = content;
                
                
            })
            
        } else {
            document.getElementById('alert').innerHTML = '<div class="alert alert-danger" role="alert">No hay cursos regitrados</div>'
        }
    })
    .fail(respuesta => {

    })


    //PAginación y filtros de tablas hechas con 
    
} );

function eliminarCourse(element){

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
                url:'../../../controller/admin/eliminarCurso.php',
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
