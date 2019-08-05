<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/BD2.php';
include_once './backend/modelo/MProducto.php';
include_once './backend/controlador/CProducto.php';
include_once './backend/controlador/CIndex.php';
$cIndex = new CIndex();
$cProducto = new CProducto();
//Paginación
$sql = 'SELECT * FROM instrumento';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();
$total_articulos = $sentencia->rowCount();
$articulos_x_pagina = 12;
$paginas = $total_articulos / $articulos_x_pagina;
$paginas = ceil($paginas);
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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/material-kit.min.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/material-kit.min.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
        <title>Emai</title>
    </head>

    <body>
        <?php
        if (!$_GET) {
            header('Location:catalogo.php?pagina=1');
        }
        if ($_GET['pagina'] > $articulos_x_pagina || $_GET['pagina'] <= 0) {
            header('Location:catalogo.php?pagina=1');
        }

        $iniciar = ($_GET['pagina'] - 1) * $articulos_x_pagina;
        ?>
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
                            <button class="btn btn-primary btn-fab btn-round" type="submit">
                                <i class="fa fa-search"></i>
                                <div class="ripple-container"></div></button>
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
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <div class="title">
                                    <h3>Marcas</h3>
                                </div>

                                <?php echo $cProducto->marcasCatalogo() ?>


                                <div class="title">
                                    <h3>Precio</h3>
                                    <div class="col-lg-12">
                                        <div id="sliderDouble" class="slider slider-rose"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div id="sliderDouble" class="slider slider-rose"></div>
                                </div>
                                <div class="title">
                                    <h3>Categoria</h3>
                                </div>
                                <?php echo $cProducto->colorCatalogo() ?> 
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value=""> Categoria 1
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" > Categoria 2
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" > Categoria 3
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" > Categoria 4
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12 buscar mt-4">
                                    <button class="btn btn-primary">Buscar</button>
                                </div>
                            </div>
                            <div class="col-lg-10 text-center">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <?php echo $cProducto->InstrumentosCatalogoPag($iniciar, $articulos_x_pagina) ?>

                                        <div class="col-lg-12">


                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item
                                                    <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>
                                                        ">
                                                        <a class="page-link" href="catalogo.php?pagina=<?php echo $_GET['pagina'] - 1 ?>" tabindex="-1">Anterior</a>
                                                    </li>

                                                    <?php for ($i = 0; $i < $paginas; $i++): ?>
                                                        <li class="page-item 
                                                            <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                                                            <a class="page-link" 
                                                               href="catalogo.php?pagina=<?php echo $i + 1 ?>">
                                                                <?php echo $i + 1 ?></a>
                                                        </li>
                                                    <?php endfor ?>

                                                    <li class="page-item
                                                    <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>
                                                        ">
                                                        <a class="page-link" href="catalogo.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Siguiente</a>
                                                    </li>
                                                </ul>
                                            </nav>

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
        <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <script>
            var typed = new Typed(".type", {
                strings: ["Instrumentos", "Accesorios", "Refacciones", "Sonido", "Iluminación"],
                typeSpeed: 60,
                backSpeed: 40,
                loop: true
            });
        </script>
        <script>
            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        </script>
    </body>

</html> 