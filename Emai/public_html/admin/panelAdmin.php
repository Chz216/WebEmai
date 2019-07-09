<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MFormulario.php';
include_once '../backend/modelo/MNoticias.php';
include_once '../backend/modelo/MProducto.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CFormulario.php';
include_once '../backend/controlador/CNoticia.php';
include_once '../backend/controlador/CProducto.php';

$admin = new CAdmin();
$noticia = new CNoticia();
$formulario = new CFormulario();
$producto = new CProducto();
session_start();
if (!isset($_SESSION["autentificado"])){
     header("Location: panelAdmin.php");
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
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../estilos/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="nombre mt-3">
                    <h1 class="align-middle">Bienvenido <?php echo $_SESSION["autentificado"]["usuario"] ?></h1>
                    <h2>SECCIÓN PRODUCTOS</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="agregar-noticia">
        <div class="col-lg-12 ">
            <div class="container">
                <div class="row">
                    <a href="#">Agregar producto &nbsp<i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div>
   
                </div>
            </div>
    </div>
        <div class="col-lg-12 mt-3">
            <div class="container">
        <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Guitarra</td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Violin</td>
     <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Guitarra</td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Bajo</td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Amplificador</td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    </body>
</html>
