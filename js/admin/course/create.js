function crearCurso(){
    var titulo = $("#titulo").val();
    var description = $("#description").val();

    if (titulo.trim() != "") {
        if (description.trim() != '') {
            
            $.ajax({
                type : 'POST',
                url : '../../../controller/admin/crearCurso.php',
                data : {
                    'titulo' : titulo,
                    'description' : description
                }
            })
            .done( respuesta => {
                if (respuesta == 'Exito') {
                    $("#myForm")[0].reset();
        
                    Swal.fire({
                        icon : 'success',
                        title : 'Bien!!!',
                        text : 'Registro Existos'
                    });
                } else {
                    Swal.fire({
                        icon : 'error',
                        title : 'Ups...',
                        text : respuesta
                    });
                }
            })
            .fail( respuesta => {
                Swal.fire({
                    icon: 'question',
                    title: 'Pero que ha pasado?',
                    text: 'Al parecer no hay conexion a internet'
                }) 
            })

        } else {
            swal.fire({
                icon : 'error',
                title : 'Ups...',
                text : 'El curso debe tener una description'
            }) 
        }
    } else {
        swal.fire({
            icon : 'error',
            title : 'Ups...',
            text : 'El curso debe tener un nombre'
        })
    }
}