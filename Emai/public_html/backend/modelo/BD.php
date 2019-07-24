<?php

class BD {

    private $servername = "localhost";
    private $database = "emai";
    private $user = "root";
    private $password = "";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function desconectar(){
	global $conexion;
	mysql_close($conexion);
}



  
 }
