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
class CProducto
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new MProducto();
    }

    public function InstrumentosMenu()
    {
        $instrumentos = $this->modelo->consultarTipoInstru();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
            <div class="col-md-6 mb-10px px-5px">
                            <div class="card border-0 text-white text-center"><img src="images/guitarra.jpg" alt="Card image" class="card-img">
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="w-100 py-3">
                                        <h2 class="display-3 font-weight-bold mb-4">' . $instrumento["nombre"] . '</h2>
                                        <a href="catalogo.php?id_tipo_instrumento=' . $instrumento["id_tipo_instrumento"] . '" class="btn btn-light">Ver<i class="fa-arrow-right fa ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        

                ';
        }
        return $acu;
    }

    public function AccesorioPrincipal()
    {
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
                            <a href="detalle.php?id_accesorio=' . $accesorio["id_accesorio"] . '">Ver más</a>
                        </div>
                        </div>
                    </div>

                ';
        }
        return $acu;
    }

    public function instrumentosAdmin()
    {
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
                                                        <a href="editarProducto.php?id_instrumento=' . $instrumento["id_instrumento"] . '"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="borrarProducto.php?id_instrumento=' . $instrumento["id_instrumento"] . '"><i class="fa fa-trash" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                ';
        }
        return $acu;
    }
    public function InstrumentosCatalogo()
    {
        $instrumentos = $this->modelo->consultarInstrumentos();
        $acu = "";
        foreach ($instrumentos as $instrumento) {
            $acu = $acu . '
            <div class="col-lg-4 col-md-4">
            <div class="card">
                <img class="card-img-top" src="' . $instrumento["imagen1"] . '" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">' . $instrumento["descripcion"] . '</p>
                    <button class="btn btn-primary">
                    <a href="detalle.php?id_instrumento=' . $instrumento["id_instrumento"] . '">
                    Ver más</a>
                    </button>
                </div>
            </div>
        </div>

                ';
        }
        return $acu;
    }

    public function marcasCatalogo()
    {
        $marcas = $this->modelo->Marcas();
        $acu = "";
        foreach ($marcas as $marca) {
            $acu = $acu . '
            <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> ' . $marca["marca"] . '
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>';
        }
        return $acu;
    }

    public function colorCatalogo()
    {
        $colores = $this->modelo->Color();
        $acu = "";
        foreach ($colores as $color) {
            $acu = $acu . '
                   <div class="form-check">
              <label class="form-check-label">
               <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option4" checked="">' . $color["color"] . '
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>';
        }
        return $acu;
    }
    public function ConsultarMarca(){
        $marcas = $this->modelo->Marca();
        $acu = "";
        foreach ($marcas  as $marca){
            $acu = $acu . '
       <select class="custom-select my-1 mr-sm-2" name="id_tipo_instrumento" id="inlineFormCustomSelectPref">
                                <option selected>' . $marca["marca"] . '</option>
        </select>';
                    
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
