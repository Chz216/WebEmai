<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MNoticias.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CNoticia.php';
$admin = new CAdmin();
$noticia = new CNoticia();
session_start();
if (!isset($_SESSION["autentificado"])) {
    header("Location: loggin.php");
}

if (isset($_POST["titulo"]) && $_FILES["imagen"] && isset($_POST["descripcion"]) && $_POST["id_noticia"]) {
    $noticia->editarNoticia($_POST["titulo"], $_FILES["imagen"], $_POST["descripcion"], $_POST["id_noticia"]);
}
$idNoticia = $noticia->noticia($_GET["id_noticia"])
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador <?php echo $_SESSION["autentificado"]["usuario"] ?></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body class="panel-admin">
        <div class="col-lg-12 text-center">
            <h1 class="display-3">Editar Noticia</h1>
        </div>
        
        <div class="col-lg-12 text-center"> 
                       
                        
            <form method="post" action="nuevoEvento.php" enctype="multipart/form-data">
                            
                            <p class="lead">Foto principal</p>
                            
                            <input type="file" name="imagen" src="../<?php echo $idNoticia["imagen"] ?>">
                            
                            <p class="lead">Titulo de la noticia o evento</p>
                            <input type="text" name="titulo" class="input" value="<?php echo $idNoticia["titulo"] ?>">
                            <p class="lead">Descripción</p>
                            <textarea type="text" name="descripcion" id="ckeditor" class="ckeditor" value="<?php echo $idNoticia["descripcion"] ?>" >
                                
                            </textarea>

                        </form>
            <div class="col-lg-12 mt-4 mb-5">
                 <input type="hidden" name="id_noticia" value="<?php echo $idNoticia["id_noticia"] ?>">
                            <input type="submit" value="Modificar noticia">

            </div>
                    </div>


    </body>
</html>

