<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MProducto.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CProducto.php';
$admin = new CAdmin();
$instrumento = new CProducto();
session_start();
/*
if (!isset($_SESSION["autentificado"])) {
    header("Location: loggin.php");
}
*/
if (!empty($_POST["id_tipo_intrumento"]) && !empty($_POST["id_categoria"]) && !empty($_POST["id_marca"]) && !empty($_POST["color"])
       && !empty($_POST["modelo"]) && !empty($_POST["precio"]) && !empty($_POST["descripcion"]) && !empty($_POST["disponibilidad"]) && !empty($_FILES["imagen1"]) && !empty($_FILES["imagen2"])
        && !empty($_FILES["imagen3"]) && !empty($_POST["observaciones"]) && !empty($_POST["cantidad_stock"])) {
    $instrumento->subirInstrumento($_POST["id_tipo_intrumento"],$_POST["id_categoria"],$_POST["id_marca"],$_POST["color"], $_POST["modelo"],$_POST["precio"],$_POST["descripcion"],
            $_POST["disponibilidad"],$_FILES["imagen1"],$_FILES["imagen2"],$_FILES["imagen3"],$_POST["observaciones"],$_POST["cantidad_stock"]);
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
        <meta charset="UTF-8">
        <title>Adminstrador</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

    </head>
   

    <body class="panel-admin">
        <div class="col-lg-12 text-center mb-4">
            <h1 class="display-3">Agregar Producto</h1>
        </div>
        <form>
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">                        
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Tipo instrumento</label>
                             <select class="custom-select my-1 mr-sm-2" name="id_categoria" id="inlineFormCustomSelectPref">
                                <option selected></option>
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                            </select>    
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Categoria</label>
                            <select class="custom-select my-1 mr-sm-2" name="id_categoria" id="inlineFormCustomSelectPref">
                                <option selected></option>
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                            </select>
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Marca</label>
                             <?php echo $instrumento->ConsultarMarca()?>
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Color</label>
                            <input type="text" class="form-control" name="color" id="validationDefault01" placeholder="Ingrese el Color" required>
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="validationDefault01" placeholder="Ingrese el modelo" required>
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Precio</label>
                            <input type="text" class="form-control" name="precio" id="validationDefault01" placeholder="Ingrese el Precio" required>
                        </div>
                        <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Disponibilidad</label>
                            <select class="custom-select my-1 mr-sm-2" name="disponibilidad" id="inlineFormCustomSelectPref">
                                <option selected>Si</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                         <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad_stock" id="validationDefault01" placeholder="Ingrese la cantidad de productos existentes" required>
                        </div>
                         <div class="col-lg-4 text-center">
                            <label for="validationDefault01">Observaciones</label>
                            <input type="text" class="form-control" name="precio" id="validationDefault01" placeholder="Observaciones" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="validationDefault01">Imagen Principal del Producto</label>
                            <input type="file" name="imagen1" accept="image/*">
                        </div>
                        <div class="col-lg-4">
                            <label for="validationDefault01">Imagen del Producto</label>
                            <input type="file" name="imagen2" accept="image/*">
                        </div>
                        <div class="col-lg-4">
                            <label for="validationDefault01">Imagen del Producto</label>
                            <input type="file" name="imagen3" accept="image/*">
                        </div>
                        <div class="col-lg-12">
                            <label for="validationDefault01">Descripción</label>
                            <textarea type="text" name="descripcion" id="ckeditor" class="ckeditor">
                                
                            </textarea>
                        </div>
                        <div class="col-lg-12 mt-4 mb-5 text-center">
                            <input type="submit" value="Agregar" class="btn btn-outline-primary">
                        </div>


                    </div>
                </div>

            </div>




        </form>






    </body>
</html>