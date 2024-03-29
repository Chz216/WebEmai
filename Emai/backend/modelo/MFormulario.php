<?php


class MFormulario extends BD {
 
    
    public function consultaraFormulario() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM formulario");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function totalComentarios (){
        try {
           $stmt = $this->conn->prepare("SELECT count(*) as total from formulario");
           $stmt->execute();
           foreach ( $stmt->fetchAll() as $registro){
               return $registro;
           }
        } catch (Exception $ex) {
            echo "Error: ". $e->getMessage();
        }
    }

    public function consultarFormulario($id) {
        try {
            $stmt = $this->conn->prepare("select * from formulario where id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function insertarFormulario($nombre,$email,$comentario) {
        try {
            $stmt = $this->conn->prepare("insert into formulario (nombre,email,comentario) values(:nombre,:email,:comentario)");
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":comentario", $comentario);
            
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

    public function borrarFormulario($id){
        try {
            $stmt = $this->conn->prepare("delete from formulario where id=:id");
            $stmt->bindParam(":id", $id);
            
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}