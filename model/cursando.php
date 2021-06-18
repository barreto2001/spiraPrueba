<?php

class Cursando
{
    private $tabla;

    public function __construct()
    {
       $this->tabla = 'cursando'; 
    }

    public function allByStudents($id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT cursos.nombre,cursos.description,cursando.id,cursando.created_at FROM cursos INNER JOIN cursando ON cursos.id = cursando.id_curso WHERE cursando.id_usuario =:id";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id',$id);
        $result->execute();

        while ($f=$result->fetch()) {
            $ready[] = $f;
        }
        
        return $ready;
    }

    public function create($id_student,$id_curso,$created_at)
    {
        $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "INSERT INTO $this->tabla (id_usuario,id_curso,created_at) VALUES (:id_usuario,:id_curso,:created_at)";

            $result = $conexion->prepare($sql);

            $result->bindParam(':id_usuario',$id_student);
            $result->bindParam(':id_curso',$id_curso);
            $result->bindParam(':created_at',$created_at);

            if (isset($result)) {
                $result->execute();
                $ready = true;
            } else {
                $ready=false;
            }
            
            return $ready;
    }

    public function deleteCursando($id)
    {
        $ready = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "DELETE FROM $this->tabla WHERE id=:id";

        $result = $conexion->prepare($sql);

        $result->bindParam(':id',$id);

        if (isset($result)) {
            $result->execute();
            $ready = true;
        } else {
            $ready=false;
        }
        
        return $ready;
    }

    public function verifyCursando($id_usuario,$id_curso)
    {
        $exit = null;
        $model = new Conexion();
        $conexion = $model->getConexion();

        $sql = "SELECT id  FROM $this->tabla WHERE id_usuario = :id_usuario AND id_curso=:id_curso";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_usuario',$id_usuario);
        $result->bindParam(':id_curso',$id_curso);
        
        $result->execute();
        

        return $result->rowCount();
    }

}

?>