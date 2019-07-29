<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MProducto.php';
include_once './backend/modelo/MNoticias.php';
include_once './backend/controlador/CNoticia.php';
include_once './backend/controlador/CIndex.php';
$cIndex = new CIndex();
$cNoticia = new CNoticia();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Emai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-black">
            <a class="navbar-brand" href="index.php "><img src="images/log_emai.png" alt="navbar" width="110px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNabvar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNabvar">
              <ul class="navbar-nav mr-4">  
<!--                 Falta reacomodar -->
                  <?php echo $cIndex->MenuInstrumentos()?>
              </ul>
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar Productos...">
                    <div class="input-group-append">
                      <button class="btn btn-danger" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            </div>
        </nav>
    <div class="col-lg-12 noticias mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                       
                        
                        <?php echo $cNoticia->Noticias() ?>
                    </div>
                </div> 


            </div>
        </div>
    </div>
         <div class="col-lg-12">
                            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="catalogo.html">1</a></li>
                <li class="page-item"><a class="page-link" href="catalogo.html">2</a></li>
                <li class="page-item"><a class="page-link" href="catalogo.html">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
                        </div>
        <footer class=" text-white">
        <div class="col-lg-12 p-3 mb-2text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="col-lg-12 text-center">
                            <h6 class="lead">TIENDA MUSICAL</h6>    
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <img src="images/emai.png" width="120" height="70" alt="">    
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

                        <p><a href="https://www.facebook.com/tiendaemai"><span class="fa fa-facebook-square mr-2" style='color:white'></span></a>Facebook</p>

                        <p><span class="fa fa-phone mr-2" ></span>38-4-34-67</p>
                        <p><span class="fa fa-map-marker mr-2"></span>Centro Tehuacan</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
