<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MProducto.php';
include_once './backend/controlador/CProducto.php';
include_once './backend/controlador/CIndex.php';
$cIndex = new CIndex();
$cProducto = new CProducto();
$id_instrumento = $_GET["id_instrumento"];
$instrumento= $cProducto->instrumento($id_instrumento);
$marca=$cProducto->marca($id_instrumento);
$tipo_inst=$cProducto->tipo_inst($id_instrumento);

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/material-kit.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Emai</title>
    </head>
    <body>
        <nav class="navbar  fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/log_emai.png" alt="navbar" width="110px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNabvar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNabvar">
                <ul class="navbar-nav mr-4">
                <?php echo $cIndex->MenuInstrumentos() ?>
                </ul>
               
            </div>
        </div>

    </nav>
    <div class="main main-raised">
            <div class="section section-basic">
                <div class="container">
                    <div class="col-lg-12 mt-5">
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                <img src="<?php echo $instrumento["imagen1"]?>" class="zoom"/>
                            </div>

                            <div class="col-lg-6 mt-3 text-center">
                                <h3>
                                    <small><?php echo $tipo_inst["nombre"]?></small>
                                </h3>
                                
                                <div class="card card-nav-tabs card-plain">
                                    <div class="card-header card-header-danger">
                                        
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" href="#home" data-toggle="tab">Marca<div class="ripple-container"></div></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#updates" data-toggle="tab">Precio<div class="ripple-container"></div></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#history" data-toggle="tab">Imagenes<div class="ripple-container"></div></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active show" id="home">
                                                <h2><?php echo $marca["marca"]?></h2>
                                            </div>
                                            <div class="tab-pane" id="updates">
                                                <h1>$ <?php echo $instrumento["precio"]?></h1>
                                            </div>
                                            <div class="tab-pane" id="history">
                                                
                                                    <div class="row">
                                                <div class="col-lg-4 imagenes-producto">
                                                    <img src="<?php echo $instrumento["imagen1"]?>" alt="..." class="img-fluid">
                                                </div>
                                                <div class="col-lg-4 imagenes-producto">
                                                    <img src="<?php echo $instrumento["imagen2"]?>" alt="..." class="img-fluid">
                                                </div>
                                                <div class="col-lg-4 imagenes-producto">
                                                    <img src="<?php echo $instrumento["imagen3"]?>" alt="..." class="img-fluid">
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
            <footer class="pie text-white">
                <div class="col-lg-12 p-3 mb-2text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="col-lg-12 text-center">
                                    <h6 class="lead">TIENDA MUSICAL</h6>    
                                </div>
                                <div class="col-lg-12 col-md-12 text-center">
                                    <img src="images/log_emai.png" width="110px" alt="">    
                                </div>
                                <div class="col-lg-12 text-center">
                                    <h6 class="lead">CONÓCENOS</h6>
                                </div>

                            </div>
                            <div class="col-lg-4 text-center">
                                <h6 class="lead">ACERCA DE</h6>
                                <p>Somos una empresa con mas de 5 años de experiencia trabajando en la ciudad de Tehuacan </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <H6 class="lead">Contáctanos</H6>

                                <p><a href="https://www.facebook.com/tiendaemai"><span class="fa fa-facebook-square mr-2" style='color:white;'></span></a>Facebook</p>

                                <span class="fa fa-phone mr-2" ></span><a href="tel:+340 38-4-34-67" style='color:white;'>38-4-34-67</a>
                                <p><span class="fa fa-map-marker mr-2"></span>Centro Tehuacan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <script src="jss/material-kit.min.js" type="text/javascript"></script>
    <script src="jss/core/jquery.min.js" type="text/javascript"></script>
    <script src="jss/core/popper.min.js" type="text/javascript"></script>
    <script src="jss/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="jss/material-kit.min.js" type="text/javascript"></script>

</body>
</html>
