<?php


class CRecital {
    private $modelo;
    
    public function __construct() {
        $this->modelo = new MRecital();
    }
    public function RecitalPrincipal(){
        $recitales= $this->modelo->consultarRecitalesPrincipal();
        $acu="";
        foreach ($recitales as $recital){
            $acu = $acu .'
                    <div class="card mb-3 mr-auto" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="'.$recital["imagen"].'" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">'.$recital["titulo"].'</h5>
                                <p class="card-text">'.substr($recital["descripcion"],0,30).'</p>
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Ver detalles</button>
                            </div>
                        </div>
                    </div>
                </div>  

                ';
        }
        return $acu;
        
    }
}