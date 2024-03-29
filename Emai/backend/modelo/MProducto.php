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
  /*
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
    */

    public function consultarTipoInstru(){
        try {
             $stmt = $this->conn->prepare("SELECT * from tipoinstrumento limit 5");
             $stmt->execute();
             
             return $stmt->fetchAll();
         } catch (PDOException $e) {
             echo "Error: " . $e->getMessage();
         } 
     }


     public function consultarInstrumentosMenu(){
       try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,id_categoria,categoria from categoria inner join tipoinstrumento "
            . "on tipoinstrumento.id_tipo_instrumento=categoria.id_categoria group by id_tipo_instrumento");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
    
    
    public function TipoInstrumento(){
     try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.id_tipo_instrumento,id_categoria,categoria from categoria inner join tipoinstrumento "
                    . "on tipoinstrumento.id_tipo_instrumento=categoria.id_categoria group by id_tipo_instrumento");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }     
    }
    public function pianos () {
        try {
   
               $stmt = $this->conn->prepare("SELECT* from instrumento where id_tipo_instrumento = 5");
               $stmt->execute();
               
               return $stmt->fetchAll();
           } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
        
               }    
       }
       public function Marca() {
        try {
               $stmt = $this->conn->prepare("SELECT * from marca group by id_marca asc limit 6"); 
               $stmt->execute();
               return $stmt->fetchAll();
           } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
        
               }    
       }
    public function Marcas() {
        try {
   
               $stmt = $this->conn->prepare("SELECT * from marca order by id_marca asc limit 6");
               $stmt->execute();
               
               return $stmt->fetchAll();
           } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
        
               }    
       }
       public function Color() {
        try {
   
               $stmt = $this->conn->prepare("SELECT color from instrumento order by id_instrumento asc limit 6");
               $stmt->execute();
               
               return $stmt->fetchAll();
           } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
        
               }    
       }

     public function consultarInstrumentos() {
     try {

            $stmt = $this->conn->prepare("SELECT * from instrumento order by id_instrumento limit 0, 12");
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    public function consultarInstrumentosPag($inicio,$fin) {
        try {
   
               $stmt = $this->conn->prepare("SELECT * from instrumento order by id_instrumento limit $inicio, $fin");
               $stmt->execute();
               
               return $stmt->fetchAll();
           } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
        
               }    
       }
     public function Paginacion() {
     try {
            $stmt = $this->conn->prepare("SELECT * from instrumento LIMIT 12 ");
            $stmt->execute();            
           return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
     
            }    
    }
    public function ContarInstrumentos() {
        try {
               $stmt = $this->conn->prepare("SELECT count(*) FROM instrumento");
               $stmt->execute();
               $instrumento = $stmt->fetchAll();
               return $instrumento['0']['0'];
           } catch (Exception $ex) {
               echo $ex->getMessage();
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
           public function insertarProducto($color,$precio,$descripcion,$imagen,$cantidad) {
        try {
            $stmt = $this->conn->prepare("insert into producto (color,precio,descripcion,imagen,cantidad) values(:color,:precio,:descripcion,:imagen,:cantidad)");
            $stmt->bindParam(":color", $color);
            $stmt->bindParam(":precio", $precio);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":cantidad", $cantidad);
            
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
      public function editarProducto($color,$precio,$descripcion,$imagen,$cantidad,$id_producto) {
        try {
            $stmt = $this->conn->prepare("update producto set color=:color,precio=:precio,descripcion=:descripcion,imagen=:imagen,cantidad=:cantidad where id_producto=:id_producto");
             $stmt->bindParam(":color", $color);
            $stmt->bindParam(":precio", $precio);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":cantidad", $cantidad);
            $stmt->bindParam(":id_producto", $id_producto);
            
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
      public function borrarProducto($id_producto){
        try {
            $stmt = $this->conn->prepare("delete from producto where id_producto=:id_producto");
            $stmt->bindParam(":id_producto", $id_producto);
            
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

        }