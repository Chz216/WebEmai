<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CFormulario
 *
 * @author melissaMay
 */

class CFormulario {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MFormulario();
    }
    
     public function subirFormulario($nombre,$email,$comentario){
        
        $this->modelo->insertarFormulario($nombre,$email,$comentario);
        header("Location: contacto.php");
    }
    
    
     public function formulario($id){
        $formulario= $this->modelo->consultarFormulario($id);
        return $formulario;
    }
    
    public function borrarFormulario($id){
        $this->modelo->borrarFormulario($id);
        header("Location: panel.php");
    }
}
