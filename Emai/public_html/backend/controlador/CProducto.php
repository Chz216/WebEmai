<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CProducto
 *
 * @author melissaMay
 */
class CProducto {

    private $modelo;

    public function __construct() {
        $this->modelo = new MProducto();
    }

    public function InstrumentosPrincipal() {
        $instrumentos = $this->modelo->consultarInstrumentosPrincipal();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
                    <div class=" col-lg-4 col-md-12">
                        <div class="card">
                            <img src="' . $instrumento["imagen1"] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $instrumento["modelo"] . '</h5>
                                <p class="card-text">' . $instrumento["descripcion"]. '
                                </p>
                               <a href="#">Ver más</a>
                            </div>
                        </div>
                    </div>

                ';
        }
        return $acu;
    }

    public function AccesorioPrincipal() {
        $accesorios = $this->modelo->consultarAccesoriosPrincipal();
        $acu = "";
        foreach ($accesorios as $accesorio) {
            $acu = $acu . '
                    <div class=" col-lg-4 col-md-12">
                        <div class="card">
                        <img src="' . $accesorio["imagen1"] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $accesorio["nombre"] . '</h5>
                            <p class="card-text">' . $accesorio["descripcion"] . '</p>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Ver detalles</button>
                        </div>
                        </div>
                    </div>

                ';
        }
        return $acu;
    }

}
