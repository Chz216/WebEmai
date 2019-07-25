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
                                <h5 class="card-title">' . $instrumento["nombre"] . '</h5>
                                <p class="card-text">' . $instrumento["descripcion"] . '
                                </p>
                               <a href="detalle.php?id_instrumento='.$instrumento["id_instrumento"].'">Ver más</a>
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
                            <a href="detalle.php?id_accesorio='.$accesorio["id_accesorio"].'">Ver más</a>
                        </div>
                        </div>
                    </div>

                ';
        }
        return $acu;
    }

    public function instrumentosAdmin() {
        $instrumentos = $this->modelo->consultarInstrumentosAdmin();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
                   <div class="col-md-6 mt-3">
                                        <div class="card profile-card-3">
                                            <div class="background-block">
                                                <img src="' . $instrumento["imagen2"] . '"/>
                                            </div>
                                            <div class="profile-thumb-block">
                                                <img src="' . $instrumento["imagen1"] . '" alt="profile-image" class="profile"/>
                                            </div>
                                            <div class="card-content">
                                                <h2>' . $instrumento["nombre"] . '</h2>
                                                <div class="icon-block">
                                                        <a href="editarProducto.php?id_instrumento='.$instrumento["id_instrumento"].'"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="borrarProducto.php?id_instrumento='.$instrumento["id_instrumento"].'"><i class="fa fa-trash" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                ';
        }
        return $acu;
    }
    public function Instrumentos() {
        $instrumentos = $this->modelo->consultarInstrumentos();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
                    <div class="col-lg-3 mt-3 col-md-4 col-sm-6">
                            <div class="card">
                                    <img src="' . $instrumento["imagen1"] . '" class="card-img-top" alt="...">
                                    <div class="card-body">
                                       <h5 class="card-title">' . $instrumento["nombre"] . '</h5>
                                        <span>Precio</span>
                                        <p>'.$instrumento["precio"].'</p>
                                        <a href="detalle.php?id_instrumento='.$instrumento["id_instrumento"].'">Ver más</a>
                                    </div>
                            </div>
                        </div>

                ';
        }
        return $acu;
    }
    public function Instrumentos2() {
        $instrumentos = $this->modelo->consultarInstrumentos2();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
                    <div class="col-lg-3 mt-3 col-md-4 col-sm-6">
                            <div class="card">
                                    <img src="' . $instrumento["imagen1"] . '" class="card-img-top" alt="...">
                                    <div class="card-body">
                                       <h5 class="card-title">' . $instrumento["nombre"] . '</h5>
                                        <span>Precio</span>
                                        <p>'.$instrumento["precio"].'</p>
                                        <a href="detalle.php?id_instrumento='.$instrumento["id_instrumento"].'">Ver más</a>
                                    </div>
                            </div>
                        </div>

                ';
        }
        return $acu;
    }
    public function Instrumentos3() {
        $instrumentos = $this->modelo->consultarInstrumentos3();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
                    <div class="col-lg-3 mt-3 col-md-4 col-sm-6">
                            <div class="card">
                                    <img src="' . $instrumento["imagen1"] . '" class="card-img-top" alt="...">
                                    <div class="card-body">
                                       <h5 class="card-title">' . $instrumento["nombre"] . '</h5>
                                        <span>Precio</span>
                                        <p>'.$instrumento["precio"].'</p>
                                        <a href="detalle.php?id_instrumento='.$instrumento["id_instrumento"].'">Ver más</a>
                                    </div>
                            </div>
                        </div>

                ';
        }
        return $acu;
    }
    public function Filtros() {
        $filtro = $this->modelo->consultarFiltros();
        $acu = "";
        foreach ($filtro as $filtros) {
            $acu = $acu . '
                    <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Marcas
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="list-group">
                                        
                                        <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                         <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                         <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                        <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                         <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Precio
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                <ul class="list-group">
                                        <li class="list-group-item"> ' . $filtros["precio"] . '</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Color
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   
                                </div>
                            </div>
                        </div>

                ';
        }
        return $acu;
    }

    public function instrumento($id_instrumento){
        $instrumento= $this->modelo->consultarDetalle($id_instrumento);
        return $instrumento;
    }
    public function marca($id_instrumento){
        $marca= $this->modelo->consultarMarca($id_instrumento);
        return $marca;
    }
    public function tipo_inst($id_instrumento){
        $tipo_inst= $this->modelo->consultarTipoInstrumento($id_instrumento);
        return $tipo_inst;
    }
         public function subirInstrumento($color,$precio,$descripcion,$imagen,$cantidad){
        copy($color["color"],$precio["precio"],$descripcion["descripcion"],$imagen["tmp_name"]. "../images/".imagen["imagen"],$cantidad["cantidad"]);
        $this->modelo->insertarProducto($color,$precio,$descripcion,"images/".$imagen["imagen"], $cantidad);
        header("Location: panelProductos.php");
    }
      public function editarInstrumento($color,$precio,$descripcion,$imagen,$cantidad,$id_producto){
       copy($color["color"],$precio["precio"],$descripcion["descripcion"],$imagen["tmp_name"]. "../images/".imagen["imagen"],$cantidad["cantidad"],$id_producto["id_producto"]);
        $this->modelo->editarProducto($color,$precio,$descripcion,"images/".$imagen["imagen"], $cantidad,$id_producto);
        header("Location: panelProductos.php");
    }
    public function borrarInstrumento($id_instrumento){
        $this->modelo->borrarProducto($id_instrumento);
        header("Location: panelProductos.php");
    }

}
