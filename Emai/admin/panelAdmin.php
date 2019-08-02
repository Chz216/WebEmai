<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MFormulario.php';
include_once '../backend/modelo/MNoticias.php';
include_once '../backend/modelo/MProducto.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CFormulario.php';
include_once '../backend/controlador/CNoticia.php';
include_once '../backend/controlador/CProducto.php';

$admin = new CAdmin();
$noticia = new CNoticia();
$formulario = new CFormulario();
$producto = new CProducto();
session_start();
if (!isset($_SESSION["autentificado"])){
     header("Location: panelAdmin.php");
}

?>

<!DOCTYPE html>
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
                            <h1> <i class="fa fa-user-circle" aria-hidden="true"></i></h1>
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

                            
                            <a href="salir.php" class="btn btn-danger btn-sm">Salir</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">
                        <div class="col-lg-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card profile-card-3">
                                            <div class="background-block">
                                                <img src="https://picsum.photos/650/940?random=13"/>
                                            </div>
                                            <div class="profile-thumb-block">
                                                <img src="https://picsum.photos/650/540?random=2" alt="profile-image" class="profile"/>
                                            </div>
                                            <div class="card-content">
                                                <h2><a href="panelProductos.php.php">Productos</a></h2>
                                                <div class="icon-block">
                                                    <a href="nuevoProducto.php"><i class="fa fa-plus"></i></a>
                                                    <a href="editarProducto.php"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#"><i class="fa fa-trash" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card profile-card-3">
                                            <div class="background-block">
                                                <img src="https://picsum.photos/650/940?random=6"/>
                                            </div>
                                            <div class="profile-thumb-block">
                                                <img src="https://picsum.photos/650/540?random=5" alt="profile-image" class="profile"/>
                                            </div>
                                            <div class="card-content">
                                                <h2><a href="panelEventos.php">Noticias</a></h2>
                                                <div class="icon-block">
                                                     <a href="panelEventos.php"><i class="fa fa-plus"></i></a>
                                                        <a href="panelEventos.php"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="panelEventos.php"><i class="fa fa-trash" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <div class="col-md-6">
                                        <div class="card profile-card-3">
                                            <div class="background-block">
                                                <img src="https://picsum.photos/650/940?random=11"/>
                                            </div>
                                            <div class="profile-thumb-block">
                                                <img src="https://picsum.photos/650/540?random=4" alt="profile-image" class="profile"/>
                                            </div>
                                            <div class="card-content">
                                                <h2>Accesorios</h2>
                                                <div class="icon-block">
                                                     <a href="nuevoAccesorio.php"><i class="fa fa-plus"></i></a>
                                                        <a href="editarAccesorio.php"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="borrarAccesorio.php"><i class="fa fa-trash" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





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
