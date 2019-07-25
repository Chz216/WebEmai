<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CIndex
 *
 * @author melissaMay
 */
class CIndex {
     private $modelo;

    public function __construct() {
        $this->modelo = new MProducto();
    }
    
     public function MenuInstrumentos() {
    $instrumentos = $this->modelo->TipoInstrumento();
        $acu = "";
     foreach ($instrumentos as $instrumento) {
     $acu = $acu . '
         <li class="nav-item">
                  <a class="nav-link" href="index.php">Inicio</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mega-menu" data-toggle="dropdown">
                      Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mega-menu">
                      <div class="row">
                        <div class="col-sm-3 col-lg-3">
                          <h5>' . $instrumento["categoria"] . '</h5>
                          <a class="dropdown-item" href="catalogo.php">Percusion</a>
                          <a class="dropdown-item" href="#">Cuerda</a>
                          <a class="dropdown-item" href="#">Viento</a>
                          <a class="dropdown-item" href="#">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3 col-lg-3">
                          <h5>Instrumentos Eléctricos</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                          <h5>Audio e Iluminación</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                          <h5>Accesorios</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                      </div>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="eventos.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contactanos</a>
                  </li>
                     ';
       // }
        return $acu;
     }
     
     
}
}
