<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CNoticia
 *
 * @author melissaMay
 */
class CNoticia {

    private $modelo;

    public function __construct() {
        $this->modelo = new MNoticias();
    }

    public function NoticiaPrincipal() {
        $noticias = $this->modelo->consultarNoticiasPrincipal();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
                      <div class="col-lg-6 mb-5">

                    <div class="row no-gutters">

                        <div class="col-md-4">
                            <img src="' . $noticia["imagen"] . '" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">' . $noticia["titulo"] . '</h5>
                                <p class="card-text"> ' .substr( $noticia["descripcion"],0,50) . '</p>
                               <a href="Noticia.php?id_noticia='.$noticia["id_noticia"].'">Ver más</a>
                            </div>
                        </div>
                    </div>


                </div> 

                ';
        }
        return $acu;
    }
      //    Falta agregar el tiempo
    public function Noticias() {
        $noticias = $this->modelo->consultarNoticias();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
                       <div class="col-lg-6 col-md-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="' . $noticia["imagen"] . '" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $noticia["titulo"] .'</h5>
                                            <p class="card-text">' . $noticia["descripcion"] . '</p>                                          
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                ';
        }
        return $acu;
    }

}
