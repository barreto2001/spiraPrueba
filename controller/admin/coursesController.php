<?php

    function coursesByStudent($id)
    {
        $result = null;
        $class = new Cursando();
        $course = $class-> allByStudents($id); 

        if (isset($course)) {
            foreach ($course as $courses ) {
                $result .= '
                <tr>
                    <td class="title">'.$courses['nombre'].'</td>
                    <td><textarea name="" class="w-100" id="" cols="30" rows="6">'.$courses['description'].'</textarea></td>
                    <td><button class="btn btn-danger" onclick="eliminarCursando(this)" id="'.$courses['id'].'">Eliminar</button></td>
                </tr>
                
                ';
            }
        } else {
            $result = '<div class="alert alert-danger" role="alert">
                            El estudiante no se encuentra asignado a ningun curso
                        </div>';
        }

        return $result;
        
    }

?>