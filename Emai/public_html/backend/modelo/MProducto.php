<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MProducto
 *
 * @author melissaMay
 */

class MProducto extends BD {
  
    public function consultarInstrumentosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,imagen1,descripcion,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
                    . "instrumento.id_instrumento order by id_instrumento asc limit 3");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
     public function consultarAccesoriosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM accesorio order by id desc limit 3");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
    
    
    public function TipoInstrumento(){
     try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.id_tipo_instrumento,id_categoria,categoria from categoria ");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }     
    }
    
     public function consultarInstrumentos() {
     try {

            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,precio,imagen1,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
                    . "instrumento.id_instrumento order by id_instrumento asc limit 24");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
     public function consultarInstrumentos2() {
     try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,precio,imagen1,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
                    . "instrumento.id_instrumento where id_instrumento>=25 order by id_instrumento asc limit 24");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
     public function consultarInstrumentos3() {
     try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,precio,imagen1,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
                    . "instrumento.id_instrumento where id_instrumento>=49 order by id_instrumento asc limit 24");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    
     public function consultarFiltros() {
     try {
            $stmt = $this->conn->prepare("SELECT marca.nombre, color,precio FROM instrumento inner join instrumento on marca.id_marca=instrumento.id_instrumento");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    
     public function consultarDetalle($id_instrumento) {
     try {
            $stmt = $this->conn->prepare("SELECT * FROM instrumento where id_instrumento=:id_instrumento");
             $stmt->bindParam(":id_instrumento", $id_instrumento);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    

      public function categoria(){
     try {
            $stmt = $this->conn->prepare("SELECT * from categoria order by id_categoria");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }     
    }
    
     public function consultarMarca($id_instrumento) {
     try {
            $stmt = $this->conn->prepare("select marca from marca inner join instrumento on marca.id_marca=instrumento.id_instrumento where id_instrumento=:id_instrumento");
             $stmt->bindParam(":id_instrumento", $id_instrumento);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
     public function consultarTipoInstrumento($id_instrumento) {
     try {
            $stmt = $this->conn->prepare("select nombre from tipoinstrumento inner join instrumento on tipoinstrumento.id_tipo_instrumento=instrumento.id_instrumento"
                    . " where id_instrumento=:id_instrumento");
             $stmt->bindParam(":id_instrumento", $id_instrumento);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    

        }