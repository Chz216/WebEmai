<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MEventos.php';
include_once './backend/controlador/CEventos.php';
include_once './backend/controlador/CIndex.php';
$cEvento = new CEventos();
$cIndex = new CIndex();

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
    <meta idioma="ES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/material-kit.min.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/material-kit.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <title> Emai </title>
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

                <div class="col-lg-12 sub-menu">
                    <div class="row">
                        <div class="col-md-6 mb-10px px-5px">
                            <div class="card border-0 text-white text-center"><img src="images/guitarra.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100 py-3">
                                        <h2 class="display-3 font-weight-bold mb-4">Guitarras</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-10px px-5px">
                            <div class="card border-0 text-white text-center"><img src="images/piano.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100 py-3">
                                        <h2 class="display-3 font-weight-bold mb-4">Pianos</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 mb-10px px-5px">
                            <div class="card border-0 text-center text-white"><img src="images/bateria.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100">
                                        <h2 class="display-4 mb-4">Baterias</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-10px px-5px">
                            <div class="card border-0 text-center text-white"><img src="images/accesorios.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100">
                                        <h2 class="display-4 mb-4">Accesorios</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-10px px-5px">
                            <div class="card border-0 text-center text-white"><img src="images/audio.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100">
                                        <h2 class="display-4 mb-4">Audio e iluminación</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-6">
                            <div id="navigation-pills">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="nav nav-pills nav-pills-icons" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active show" href="#dashboard-1" role="tab" data-toggle="tab" aria-selected="true">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i> Misión
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab" aria-selected="false">
                                                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>visión
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tab-content tab-space">
                                                    <div class="tab-pane active show" id="dashboard-1">

                                                        <p class="text-justify">Nuestra misión es proporcionar los mejores instrumentos musicales con la más alta calidad y precios accesibles, para satisfacer a nuestros clientes. Queremos que estén satisfechos con nuestros productos y servicios. Brindaremos un mejor sonido y diseños innovadores para que tanto niños, jóvenes y adultos tengan acceso a productos que estén a la vanguardia.</p>

                                                    </div>
                                                    <div class="tab-pane" id="tasks-1">
                                                    <p>Nuestra visión es ser la empresa número uno en venta de instrumentos musicales, así como también lograr un mejor sonido y diseños vanguardistas para lograr una mejor imagen en nuestros instrumentos.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="images/imagen 1.jpg" class="img-fluid shadow">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="h1">Eventos Relevantes</p>
                        </div>

                        
                        <?php echo $cEvento->NoticiaPrincipal() ?>



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

                            <span class="fa fa-phone mr-2"></span><a href="tel:+340 38-4-34-67" style='color:white;'>38-4-34-67</a>
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