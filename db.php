<?php
    namespace DB;
    class Producto{
        public function __construct(
            private string $nombre,
            private int|string $cantidad,
            private int $precio,            
        ){
            $this->cantidad == 0
                ?$this->cantidad = 'No disponible'
                :$this->cantidad.='Ud';            
        }        
        public function __toString(){            
            return "
                <td>$this->nombre</td>
                <td>$this->precio$</td>
                <td>$this->cantidad</td>
                
            ";
        }
        public function get_nombre():string{
            return "Producto: ".$this->nombre;
        }
        public function get_cantidad():string{
            return $this->cantidad;
        }
        public function get_precio():string{
            return $this->get_nombre()." tiene un costo de ".$this->precio;
        }
        public function set_nombre(string $other_nombre):void{
            $this->nombre = $other_nombre;
        }
        public function set_cantidad(int $other_cantidad):void{             
            $this->cantidad = $other_cantidad;
            $this->cantidad == 0
                ?$this->cantidad = 'No disponible'
                :$this->cantidad.='Ud';  
        }
        public function set_precio(int $other_precio):void{
            $this->precio = $other_precio;
        }
    }

    class Almacen{
        private $productos;

        public function set_producto(Producto $producto){
            $this->productos[] = $producto;
        }
        public function get_productos():string{    
            $filas = "";
            foreach ($this->productos as $i => $descipcion) {                
                $filas.= "
                    <tr>
                        <td>".$i."</td>
                        $descipcion
                    </tr>
                ";
            }
            return $filas;
        }        
    }


    
?>