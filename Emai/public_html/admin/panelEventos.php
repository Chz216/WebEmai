<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MNoticias.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CNoticia.php';

$admin = new CAdmin();
$noticia = new CNoticia();
session_start();
if (!isset($_SESSION["autentificado"])){
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
        <title>Administrador  <?php echo $_SESSION["autentificado"]["usuario"] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="panel-admin">
               <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">

                        <div class="profile-userpic text-center">
                            <img src="https://picsum.photos/290/200?random=5" class="img-responsive" alt="">
                        </div>

                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Usuario
                            </div>
                            <div class="profile-usertitle-job">
                                Administrador
                            </div>
                        </div>

                        <div class="profile-userbuttons">

                            <button type="button"  href="salir.php" class="btn btn-danger btn-sm">Salir</button>
                            <hr>
                             <a href="nuevoEvento.php">Agregar Noticia &nbsp<i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">
                        <div class="col-lg-12">
                            <div class="container">
                                <div class="row">

                                     <?php echo $noticia->NoticiasAdmin()?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <center>
        <strong>Tienda de Música <a href="http://emai.com" target="_blank">Emai</a></strong>
    </center>
    </body>
</html>
