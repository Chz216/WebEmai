<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CAdmin.php';
$admin = new CAdmin();
session_start();
if( isset($_POST["usuario"]) && isset($_POST["password"])){
$admin->validarUsuario($_POST["usuario"], $_POST["password"]);    
}
if (isset($_SESSION["autentificado"])){
     header("Location: panelAdmin.php");
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Aministrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="formulario-admin">
        <div class="col-lg-12 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-5 card">
                        <div id="login-logo">
                            <img alt="" class="img-fluid" src="images/emai 2.png">
                        </div>
                        <h1 class="display-4">Administrador</h1>
                        <form method="post" action="loggin.php">
                             <div class="input-group mt-3" id="usuario">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user mx-auto"></i>
                                    </div>
                                </div>
                                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-key mx-auto"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                            </div>
                           
                            <button type="submit" class="btn btn-success col-12 mt-3 mb-5">Entrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </body>
</html>
