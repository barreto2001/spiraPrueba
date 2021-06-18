<?php

    function verifyBdUnique($tabla,$columna,$registro)
    {
        $class = new verifyModel();
        $consulta = $class->verifyUnique($tabla,$columna,$registro);

        return $consulta > 0 ? false : true;
    }

?>