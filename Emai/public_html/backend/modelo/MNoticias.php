<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MNoticias
 *
 * @author melissaMay
 */

class MNoticias extends BD {

    public function consultarNoticiasPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM noticia order by id_noticia desc limit 4");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
    
    public function consultarNoticias(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM noticia order by id_noticia ");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
         public function consultarNoticia($id_noticia) {
        try {
            $stmt = $this->conn->prepare("select * from noticia where id_noticia=:id_noticia");
            $stmt->bindParam(":id_noticia", $id_noticia);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
      public function editarNoticia($titulo,$imagen,$descripcion,$id_noticia) {
        try {
            $stmt = $this->conn->prepare("update noticia set titulo=:titulo, imagen=:imagen, descripcion=:descripcion where id_noticia=:id_noticia");
            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":id_noticia", $id_noticia);
            
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
      
    public function insertarNoticia($titulo,$imagen,$descripcion) {
        try {
            $stmt = $this->conn->prepare("insert into noticia (titulo,imagen,descripcion) values(:titulo,:imagen,:descripcion)");
          $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":descripcion", $descripcion);
            
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }    
    
        public function borrarNoticia($id_noticia){
        try {
            $stmt = $this->conn->prepare("delete from noticia where id_noticia=:id_noticia");
            $stmt->bindParam(":id_noticia", $id_noticia);
            
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
        }