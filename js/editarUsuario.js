//Cuando acabe de cargar ejecute esto...
$(document).ready(function(){
    //Obtenien el valor que tiene input
    var campos = [
        $("#nombre").val(),
        $("#apellido").val(),
        $("#telefono").val(),
        $("#email").val()
    ];
    
    //Detectar el eventeo keyup     
    $(".editable").keyup(function(){

        //Tomando el nuevo valor del input
        
        var camposEditados = $(".editable");
        for (var i = 0; i<camposEditados.length;i++) {
            if (camposEditados[i].value.trim() != "" && campos[i] !=  camposEditados[i].value.trim()) {
                $("#boton").removeAttr('disabled');
                break; 
            } else {
                $("#boton").attr('disabled','true');
            }
        }
    });
});

function editUser(){

    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();
    var id = $("#cosa").val();

    $.ajax({
        type: 'POST',
        url: '../../controller/editUserController.php',
        data: {
            'nombre' : nombre,
            'apellido' : apellido,
            'telefono' : telefono,
            'email' : email,
            'id' : id
        }
    })
    .done(function (respuesta) { 
        if (respuesta == 'fail') {
            Swal.fire({
                icon : 'error',
                title : 'Ups...!',
                text : 'Ha ocurrido un error'
            });
            
        } else {
            
            $.confirm({
                icon: 'bi bi-wrench',
                title: 'Bien',
                content: respuesta,
                buttons:{
                    Ok:{ 
                        action: function (){
                            window.location.reload();
                        },
                        btnClass : 'btn-blue',

                    }
                }
            })
            
        }
    })
    .fail(function () {

    })

}
