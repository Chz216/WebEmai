<?php

class MProducto extends BD {
  
    public function consultarInstrumentosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM instrumentos order by id desc limit 3");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
     public function consultarAccesoriosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM accesorio order by id desc limit 3");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

        }