function login() {
    email = document.getElementById('email').value;
    password = $("#password").val();

    if (email.trim() != "" && password.trim() != "") {
        
        $.ajax({
            type: 'POST',
            url: 'controller/login/login.php',
            data:{
                'email' : email,
                'password' : password
            }
        })
        .done((respuesta) => {
            esto = JSON.parse(respuesta);
            console.log(esto);
            if (esto[0].com == 'Exito') {
                window.location.href =esto[0].route;
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No joa careMonda',
                    text: esto[0].com
                })
            }
        })
        .fail(function (params) {
            
        });

    } else {
        Swal.fire({
            icon: 'warning',
            title: 'No joa careMonda',
            text: 'Llena los campo cabeceverga'
        })
    }
}