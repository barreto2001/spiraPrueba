<?php

    

    function viewCourses()
    {
        $class =  new Curso();

        $cursos = $class -> getCourse();

        $res = null;

        if (isset($cursos)) {
            foreach ($cursos as $curso) { 
                $res .= '
                <tr>
                    <th>'.$curso['nombre'].'</th>
                    <th>
                        <textarea name="" id="" cols="36" rows="6" class="w-100">'.$curso['description'].'</textarea>
                    </th>
                    <th>'.$curso['intensidad'].'</th>
                    <th>
                        <a href="update.php?curso='.$curso['id'].'"><button class="btn btn-primary">Editar</button></a>
                    </th>
                        
                    <th>
                        <button class="btn btn-danger" onclick="eliminarCourse(this)" id="'.$curso['id'].'">Eliminar</button>
                    </th>
                </tr> 
                ';
            }
        } else {
           $res = '<div class="alert alert-danger">No hay cursos para mostrar</div>' ;
        }
        
        return $res;
    }

    

    
                
    

?>