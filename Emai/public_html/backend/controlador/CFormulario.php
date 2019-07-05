<?php


class CFormulario {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MFormulario();
    }
    
     public function subirFormulario($nombre,$correo,$texto){
        
        $this->modelo->insertarFormulario($nombre,$correo,$texto);
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
