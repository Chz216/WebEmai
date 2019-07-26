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
       <div class="col-lg-12 text-center mb-4">
            <h1 class="display-3">Editar Producto</h1>
        </div>

        <form>
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Nombre Producto</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Producto" value="Ingrese nombre" required>

                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Categoria</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Percuision</option>
                                <option value="1">Viento</option>
                                <option value="2">Otro</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="validationDefault01">Imagen del Producto</label>
                            <input type="file" name="foto" accept="image/*">

                        </div>
                        <div class="col-lg-12">
                            <label for="validationDefault01">Descripción</label>
                            <textarea type="text" name="noticia" id="ckeditor" class="ckeditor">
                                
                            </textarea>
                        </div>
                        <div class="col-lg-12 mt-4 mb-5 text-center">
                            <input type="submit" value="Guardar" class="btn btn-outline-primary">
                        </div>


                    </div>
                </div>

            </div>




        </form>
        
    </body>
</html>
