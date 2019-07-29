<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MFormulario.php';
include_once './backend/modelo/MProducto.php';
include_once './backend/controlador/CFormulario.php';
include_once './backend/controlador/CIndex.php';
$cIndex = new CIndex();
$cFormulario = new CFormulario();
if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["texto"])){
    $cFormulario->subirFormulario($_POST["nombre"], $_POST["telefono"], $_POST["asunto"], $_POST["texto"]);
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
        <div class="col-lg-12 mt-5">
            <div class="container">
                <div class="row">


                    <div class="hero-content pb-5 text-center">
                        <h1 class="hero-heading">Escuela Musical de Artes Integrales</h1>
                        <div class="row">   

                            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Venta de instrumentos y accesorios de la mejor calidad. ¡Pregunta por nuestros precios! Contamos con clases de violín, piano, canto, batería, ukulele, bajo eléctrico, guitarra eléctrica y acústica. ¡No te preocupes por el instrumento!
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style="background: #fafafa;" class="py-6">   
            <div class="container">       
                <div class="row">
                    <div class="col-md-4 text-center text-md-center">
                        <div class="display-3">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>


                        <h4 class="ff-base">Dirección</h4>
                        <p class="text-muted">Calle 3 Poniente
                            <br>Tehuacan<br>Puebla <strong>México</strong></p>
                    </div>
                    <div class="col-md-4 text-center text-md-center">
                        <div class="display-3">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </div>
                        <h4 class="ff-base">Teléfono</h4>
                        <p class="text-muted">Llamanos.</p>
                        <p class="text-muted"><strong>01 238 380 0826</strong></p>
                    </div>
                    <div class="col-md-4 text-center text-md-center">
                        <div class="display-3">
                            <i class="icon fa fa-address-book-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="ff-base">Preguntas</h4>
                        <p class="text-muted">Envianos tus dudas a nuestro correo electrónico</p>
                        <ul class="list-unstyled text-muted">
                            <li>emai@gmail.com</li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="col-lg-12 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu nombre">
                                <br>

                                <label for="exampleInputEmail1">Correo electronico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu correo">
                                <small id="emailHelp" class="form-text text-muted">Verifica tu correo.</small>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Queja o sugerencia</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="button" class="btn btn-secondary btn-lg btn-block">Enviar</button>

                        </form>
                    </div>
                    <div class="col-lg-6">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.4997162171353!2d-97.39729248558412!3d18.461010475812362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bd27f93da751%3A0x278a4a39004c20f2!2sEscuela+de+M%C3%BAsica+Emai!5e0!3m2!1ses-419!2smx!4v1560561459018!5m2!1ses-419!2smx" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>          
                    </div>

                </div>
            </div>
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
                            <h6 class="lead">CONOCENOS</h6>
                        </div>

                    </div>
                    <div class="col-lg-4 text-center">
                        <h6 class="lead">ACERCA DE</h6>
                        <p>Somos una empresa con mas de 5 años de experiencia trabajando en la ciudad de Tehuacan </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <H6 class="lead">Contactanos</H6>

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
