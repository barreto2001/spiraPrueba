function crearCurso(){
    var titulo = $("#titulo").val();
    var description = $("#description").val();
    var intensidad = parseFloat($("#intensidad").val())

    if (titulo.trim() != "") {
        if (description.trim() != '') {
            if (intensidad % 1 == 0 && intensidad > 0) {
                
                $.ajax({
                    type : 'POST',
                    url : '../../../controller/admin/crearCurso.php',
                    data : {
                        'titulo' : titulo,
                        'description' : description,
                        'intensidad' : intensidad   
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
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    text: 'La intensidad horaira debe ser un numero entero y positivo'
                }) 
            }
            

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