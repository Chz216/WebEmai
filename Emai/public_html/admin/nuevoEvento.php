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
            <h1 class="display-3">Agregar Evento</h1>
        </div>
       

             
        
        
        <div class="col-lg-12 text-center"> 
                       
                        
                        <form method="post" action="nuevaNoticia.php" enctype="multipart/form-data">
                            
                            <p class="lead">Foto principal</p>
                            
                            <input type="file" name="foto" accept="image/*">
                            
                            <p class="lead">Titulo del Evento</p>
                            <input type="text" name="titulo" class="input">
                            <p class="lead">Descripción</p>
                            <textarea type="text" name="noticia" id="ckeditor" class="ckeditor">
                                
                            </textarea>

                        </form>
            <div class="col-lg-12 mt-4 mb-5">
                <input type="submit" value="Subir Evento" class="btn btn-primary btn-lg">
            </div>
                    </div>


    </body>
</html>
