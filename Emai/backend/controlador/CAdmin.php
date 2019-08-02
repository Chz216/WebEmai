<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CAdmin
 *
 * @author melissaMay
 */
class CAdmin {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MAdmin();
    }
    
    
    public function validarUsuario($usuario, $password){
        $usuario=$this->modelo->consultarUsuario($usuario, $password);
        if(isset($usuario)){
          $_SESSION["autentificado"] = $usuario;
          header("Location: loggin.php");
        }else{
            echo "<br><br><br><br><h1>Usuario incorrecto</h1>";
        }
    }
    
    public function mostrarUsuario($usuario, $password){
        $usuario=$this->modelo->consultarUsuario($usuario, $password);
        if(isset($usuario)){
          $_SESSION["autentificado"] = $usuario;
          header("Location: panel.php");
        }else{
            echo "<br><br><br><br><h1>Usuario incorrecto</h1>";
        }
    }
    
    
    
    
}
