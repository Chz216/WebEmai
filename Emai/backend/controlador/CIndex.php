<?php
class CIndex
{




    public function MenuInstrumentos()
    {
        $acu = "";
        $acu = $acu . '
     <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contactanos</a>
                    </li>
                    </li>
     ';
        return $acu;
    }
}
