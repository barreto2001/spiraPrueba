<?php

    function viewUser()
    {
        $resultado = null;
        $class = new Usuarios();
        $user = $class->getUsers();

        if (isset($user)) {
           
            foreach ($user as $users)
            {
                $resultado .= '
                <div class="col-md-4">
                    <div class="card w-100 m-2">
                        <div class="card-header">
                            '.$users['created_at'].'
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">'.$users['nombre'].' '.$users['apellido'].'</h5>
                            <p class="card-text">Email: '.$users['email'].'</p>
                            <p class="card-text">Telefono: '.$users['telefono'].'</p>
                            <a href="editarUsuarios.php?user='.$users['id'].'" class="btn btn-primary">Editar</a>
                            <button onclick="eliminarUser(this)" class="btn btn-danger" id="'.$users['id'].'">Eliminar</button>
                        </div>
                    </div>
                </div>
                ';
            }

        } else {
            $resultado = '
            <div class="alert alert-danger" role="alert">
                No tiene usuarios
            </div>
            ';
        }

        return $resultado;
        
    }

    function editUser($id)
    {
        $resultado = null;
        $class = new Usuarios();
        $user = $class->getUserId($id);

        if (isset($user)) {
            $resultado = $user;
        } else {
            $resultado = 'No hay nada';
        }

        return $resultado;
        
    }

?>