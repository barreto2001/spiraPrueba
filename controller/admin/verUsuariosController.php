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
                <tr>
                    <td>'.$users['nombre'].'</td>
                    <td>'.$users['apellido'].'</td>
                    <td>'.$users['telefono'].'</td>
                    <td>'.$users['email'].'</td>
                    <td><a href="editarUsuarios.php?user='.$users['id'].'"><button class="btn btn-primary">Editar</button></a></td>
                    <td><button class="btn btn-danger" onclick="eliminarUser(this)" id="'.$users['id'].'">Eliminar</button></td>
                    <td><a href="../courseStudent/coursesByStudent.php?student='.$users['id'].'"><button class="btn btn-secondary">Cursos</button></a></td>
                </tr>
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