<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CAdmin.php';
$admin = new CAdmin();
session_start();
if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $admin->validarUsuario($_POST["usuario"], $_POST["password"]);
}
if (isset($_SESSION["autentificado"])) {
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
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/style.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>



        <div class="login-box">
            <h1>Administrador</h1>
            <form method="post" action="loggin.php">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario">
                </div>
                <br>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password"> 
                </div>

                <input type="submit" class="btn" value="Entrar">
            </form>
        </div>



    </body>
</html>
