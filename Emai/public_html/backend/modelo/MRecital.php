<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MRecital
 *
 * @author melissaMay
 */
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