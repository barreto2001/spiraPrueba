$(document).ready(function(){
    //Obtenien el valor que tiene input
    var campos = [
        $("#nombre").val(),
        $("#description").val()
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

//Convertimos en array las variables en el GET
function getVariableGetByName() {
    var variables = {};
    var arreglos = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
       variables[key] = value;
    });
    return variables;
}

//Para recuperar la variable con nombre "curso", acudimos a dicha posición del arreglo.
var idCurso = getVariableGetByName()["curso"];

$.ajax({
    type : "POST",
    url : '../../../controller/admin/verCursoEditar.php',
    data : {
        'id' : idCurso
    }
})
.done(respuesta => {
    respuesta = JSON.parse(respuesta);
    if (respuesta[0].res == "Exito") {
        content = respuesta[0].content[0];
        $("#titulo").val(content.nombre);
        $("#description").val(content.description);
        $("#id").val(content.id);
    
    } else {

        
        $.alert({
            title: 'Ups...',
            content : 'No exite este curso',
            button :{
                Ok : {
                    action: function (){
                        window.location.href= 'read.php';
                    },
                    btnClass : 'btn-blue',
                }
            }
        });
    } 
})
.fail(respuesta => {

})

//Función actualizar datos

function editCourse(){

    var titulo = $("#titulo").val();
    var description = $("#description").val();
    var id = $("#id").val();

    $.ajax({
        type: 'POST',
        url: '../../../controller/admin/editCurso.php',
        data: {
            'titulo' : titulo,
            'description' : description,
            'id' : id
        }
    })
    .done(function (respuesta) { 
        respuesta = JSON.parse(respuesta); 
        if (respuesta[0].res == "fail") {
            Swal.fire({
                icon : 'error',
                title : 'Ups...!',
                text : respuesta[0].fail
            });
            
        } else {
            
            $.confirm({
                icon: 'bi bi-wrench',
                title: 'Bien',
                content:  respuesta[0].fail,
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

