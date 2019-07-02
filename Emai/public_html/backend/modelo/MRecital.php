<?php

class MRecital extends BD {
  
    public function consultarRecitalesPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM noticia order by id desc limit 4");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
}}