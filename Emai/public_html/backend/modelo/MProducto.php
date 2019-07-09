<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MProducto
 *
 * @author melissaMay
 */

class MProducto extends BD {
  
    public function consultarInstrumentosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM instrumento order by id_instrumento asc limit 3");
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