<?php
class CEventos {

    private $modelo;

    public function __construct() {
        $this->modelo = new MEventos();
    }

    public function NoticiaPrincipal() {
        $noticias = $this->modelo->consultarNoticiasPrincipal();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
            <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">' . $noticia["titulo"] .'</i>
                    </div>
                </div>

                <div class="card-body">

                    <p class="text-justify"> ' .substr( $noticia["descripcion"],0,65) . '</p>
                    <button class="btn btn-primary">
                    <a href="detalleEvento.php?id_noticia='.$noticia["id_noticia"].'">
                    Ver Mas
                    </a>
                    </button>
                </div>
            </div>
        </div>

                ';
        }
        return $acu;
    }
    public function NoticiasPrimero() {
        $noticias = $this->modelo->consultarNoticiasPrimero();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
            <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">' . $noticia["titulo"] .'</i>
                    </div>
                </div>
                <div class="card-body">

                    <p class="text-justify"> ' .substr( $noticia["descripcion"],0,200) . '</p>
                    <button class="btn btn-primary">
                    <a href="detalleEvento.php?id_noticia='.$noticia["id_noticia"].'">
                    Ver más
                    </a>
                    </button>
                </div>
            </div>
        </div>
                ';
        }
        return $acu;
    }
    public function NoticiasSegundo() {
        $noticias = $this->modelo->consultarNoticiasDespues();
        $acu = "";
        foreach ($noticias as $noticia) {
            $acu = $acu . '
            <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">'.$noticia["titulo"].'</i>
                    </div>
                </div>
                <div class="card-body">

                    <p class="text-justify">' .substr( $noticia["descripcion"],0,200) . '</p>
                    <button class="btn btn-primary">
                    <a href="detallEvento.php?id_noticia='.$noticia["id_noticia"].'">
                    Ver más
                    </a>
                    </button>
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
