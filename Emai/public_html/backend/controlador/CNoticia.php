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
    public function NoticiasAdmin() {
        $noticias = $this->modelo->consultarNoticias();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
                       <div class="col-md-6 mt-3">
                                        <div class="card profile-card-3">
                                            <div class="background-block">
                                                <img src="' . $noticia["imagen"] . '"/>
                                            </div>
                                            <div class="profile-thumb-block">
                                                <img src="' . $noticia["imagen"] . '" alt="profile-image" class="profile"/>
                                            </div>
                                            <div class="card-content">
                                                <h2>' . $noticia["titulo"] .'</h2>
                                                <div class="icon-block">
                                                        <a href="editarEvento.php?id_noticia='.$noticia["id_noticia"].'"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="borrarEvento.php?id_noticia='.$noticia["id_noticia"].'"><i class="fa fa-trash" ></i></a>
                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                ';
        }
        return $acu;
    }
     public function noticia($id_noticia){
        $noticia= $this->modelo->consultarNoticia($id_noticia);
        return $noticia;
    }
        public function editarNoticia($titulo, $imagen, $descripcion,$id_noticia) {
        copy($titulo["titulo"],$imagen["tmp_name"]. "../images/" . $imagen["imagen"],$descripcion["descripcion"]);
        $this->modelo->editarNoticia($titulo,"images/" . $imagen["imagen"], $descripcion,$id_noticia);
        header("Location: panelEventos.php");
    }
       public function borrarNoticia($id_noticia){
        $this->modelo->borrarNoticia($id_noticia);
        header("Location: panelEventos.php");
    }
        public function subirNoticia($titulo, $imagen, $descripcion) {

        copy($titulo["titulo"],$imagen["tmp_name"]. "../images/" . $imagen["imagen"],$descripcion["descripcion"]);
        $this->modelo->insertarNoticia($titulo, "images/" . $imagen["imagen"],$descripcion);
        header("Location: panelEventos.php");
    }
    
}
