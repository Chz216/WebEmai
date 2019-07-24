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
    
        }