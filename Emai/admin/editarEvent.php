<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
         <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body class="panel-admin">
        <div class="col-lg-12 text-center">
            <h1 class="display-3">Editar Evento</h1>
        </div>

        <form method="post" action="nuevaNoticia.php" enctype="multipart/form-data">
            <div class="col-lg-12 text-center"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <label for="validationDefault01">Titulo Evento</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Evento" value="Ingrese nombre" required>

                        </div>
                        <div class="col-lg-4">
                            <label for="validationDefault01">Imagen del Evento</label>
                            <input type="file" name="foto" accept="image/*">

                        </div>
                        <div class="col-lg-12 mt-4">
                            <p class="lead">Descripción</p>
                            <textarea type="text" name="noticia" id="ckeditor" class="ckeditor">
                                
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <div class="col-lg-12 mt-4 mb-5 text-center">
            <input type="submit" value="Guardar Cambios" class="btn btn-outline-info">
        </div>






        
        
    </body>
</html>
