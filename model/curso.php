<?php

    class Curso
    {
        private $tabla;

        function __construct()
        {
            $this->tabla  = "cursos";
        }

        public function create($titulo,$description,$intensidad,$created_at,$user_created)
        {
            $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "INSERT INTO $this->tabla (nombre,description,intensidad,created_at,user_created) VALUES (:nombre,:description,:intensidad,:created_at,:user_created)";

            $result = $conexion->prepare($sql);

            $result->bindParam(':nombre',$titulo);
            $result->bindParam(':description',$description);
            $result->bindParam(':intensidad',$intensidad);
            $result->bindParam(':user_created',$user_created);
            $result->bindParam(':created_at',$created_at);

            if (isset($result)) {
                $result->execute();
                $ready = true;
            } else {
                $ready=false;
            }
            
            return $ready;

        }

        public function getCourse()
        {
            $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "SELECT * FROM $this->tabla";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($f=$result->fetch()) {
                $ready[] = $f;
            }
            
            return $ready;
        }

        public function deleteCourse($id)
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

        public function getCourseId($id)
        {
            $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "SELECT id,nombre,description,intensidad FROM $this->tabla WHERE id = :id";
            $result = $conexion->prepare($sql);
            $result->bindParam(':id',$id);
            $result->execute();

            if ($f=$result->fetch()) {
                $ready[] = $f;
            }
            
            return $ready;
        }

        public function updatedAll($titulo,$description,$intensidad,$updated_at,$user_updated,$id)
        {
            $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "UPDATE $this->tabla SET nombre=:titulo,description=:description,intensidad=:intensidad,updated_at=:updated_at,user_updated=:user_updated WHERE id =:id";

            $result = $conexion->prepare($sql);

            $result->bindParam(':titulo',$titulo);
            $result->bindParam(':description',$description);
            
            $result->bindParam(':intensidad',$intensidad);
            $result->bindParam(':updated_at',$updated_at);
            $result->bindParam(':user_updated',$user_updated);
            $result->bindParam(':id',$id);

            if (isset($result)) {
                $result->execute();
                $ready = true;
            } else {
                $ready=false;
            }
            
            return $ready;
        }

        public function updatedDescription($description,$intensidad,$updated_at,$user_updated,$id)
        {
            $ready = null;
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();

            $sql = "UPDATE $this->tabla SET description=:description,intensidad=:intensidad,updated_at=:updated_at,user_updated=:user_updated WHERE id =:id";

            $result = $conexion->prepare($sql);

            
            $result->bindParam(':description',$description);
            
            $result->bindParam(':intensidad',$intensidad);
            $result->bindParam(':updated_at',$updated_at);
            $result->bindParam(':user_updated',$user_updated);
            $result->bindParam(':id',$id);

            if (isset($result)) {
                $result->execute();
                $ready = true;
            } else {
                $ready=false;
            }
            
            return $ready;
        }
    }

    

?>