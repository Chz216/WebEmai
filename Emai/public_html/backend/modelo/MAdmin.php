<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MAdmin
 *
 * @author melissaMay
 */
class MAdmin  extends BD{
    public function consultarUsuario($nombre_usuario,$password){
        try {
            $pass= md5($password);
            $stmt = $this->conn->prepare("select * from nombre_usuario where nombre_usuario=:nombre_usuario and password=:password");
            $stmt->bindParam(":nombre_usuario", $usuario);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }    
    }
}
