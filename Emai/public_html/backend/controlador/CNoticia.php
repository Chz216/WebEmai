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
                                <p class="card-text">' . $noticia["descripcion"] . '</p>
                               <a href="#">Ver más</a>
                            </div>
                        </div>
                    </div>


                </div> 

                ';
        }
        return $acu;
    }

}
