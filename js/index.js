function login() {
    email = document.getElementById('email').value;
    password = $("#password").val();

    if (email.trim() != "" && password.trim() != "") {

        fetch('controller/login/login.php',{
            methods : 'POST',
            body : {
                'email' : email,
                'password' : password
            }
        })
        .then(respuesta => {
            esto = JSON.parse(respuesta);
            console.log(esto);
            if (esto[0].com == 'Exito') {
                window.location.href =esto[0].route;
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Datos incorrectos',
                    text: esto[0].com
                })
            }
        })
        .catch(err =>{
            console.log(err);
        })
        
        /* $.ajax({
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
                    title: 'Datos incorrectos',
                    text: esto[0].com
                })
            }
        })
        .fail(function (params) {
            
        }); */

    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            text: 'Por favor ingrese un email valido y la contraseña'
        })
    }
}