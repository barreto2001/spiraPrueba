

function enviarCrear(){
    
    var nombre = $("#nombre").val();
    var apellidos = $("#apellidos").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();
    var password =  $("#email").val();

    $.ajax({
        type: 'POST',
        url: '../../../controller/admin/crearUsuario.php',
        data: {
            'nombre' : nombre,
            'apellidos': apellidos,
            'telefono' : telefono,
            'email' : email,
            'password' : password
        }
        
    })
    .done(function(respuesta){
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
    .fail(function(){
        Swal.fire({
            icon: 'question',
            title: 'Pero que ha pasado?',
            text: 'Al parecer no hay conexion a internet'
        })
    })
}