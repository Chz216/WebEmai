<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MProducto.php';
include_once './backend/modelo/MEventos.php';
include_once './backend/controlador/CEventos.php';
include_once './backend/controlador/CIndex.php';
$cIndex = new CIndex();
$cNoticia = new CEventos();
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
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/log_emai.png" alt="navbar" width="110px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNabvar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNabvar">
                <ul class="navbar-nav mr-4">
                    <?php echo $cIndex->MenuInstrumentos() ?>

                </ul>
                <form class="navbar-form navbar-expanded-lg" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Productos">

                    </div>
                </form>
            </div>
        </div>

    </nav>
        <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('images/comprimida 2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="brand">                         
                            <h2>Escuela Musical de Artes Integrales</h2>
                            <p><span class="type"></span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised mb-5">
            <div class="section section-basic">
                <div class="container">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="h1">Eventos Relevantes</p>
                            </div>

                            <?php echo $cNoticia->NoticiasPrimero() ?>

                            <div class="col-lg-12 text-center">
                                <div class="section" id="carousel">
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-lg-8 col-md-12 col-sm-12 mr-auto ml-auto">
                                                <div class="card card-raised card-carousel">
                                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="images/comprimida.jpg" alt="First slide">
                                                               
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/comprimida 2.jpg" alt="Second slide">
                                                               
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="images/comprimida3.jpg" alt="Third slide">
                                                                
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                            <i class="fa fa-chevron-circle-left"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <i class="fa fa-chevron-circle-right"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <?php echo $cNoticia->NoticiasSegundo() ?>
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



    <script src="jss/material-kit.min.js" type="text/javascript"></script>
    <script src="jss/core/jquery.min.js" type="text/javascript"></script>
    <script src="jss/core/popper.min.js" type="text/javascript"></script>
    <script src="jss/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="jss/material-kit.min.js" type="text/javascript"></script>
    <script src="jss/plugins/typed.js" type="text/javascript"></script>
    <script>
        var typed = new Typed(".type", {
            strings: ["Instrumentos", "Accesorios", "Refacciones", "Sonido", "Iluminación"],
            typeSpeed: 60,
            backSpeed: 40,
            loop: true
        });

    </script>
</body>
</html>
