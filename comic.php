<?php
    require 'clases.php';

    class Comic extends Libro{
        private $ilustradores;
        private $volumen;
    
        public function __construct(
             $autor,
            $titulo,
            $precio,
            $stock,
            $id,
            $ilustradores,
            $volumen

        )
        {
            parent::__construct($autor, $titulo, $precio, $stock, $id);
            $this->ilustradores = $ilustradores;
            $this->volumen = $volumen;
            
        
        }
    
        public function verInfo() {


            $historieta = "<table class='table'>
            <tr>
                <th scope='col'>Ilustrador</th>
                <th scope='col'>Volumen</th>
            
            </tr>
            <tr>
            
                <td>$this->ilustradores</td>
                <td>$this->volumen</td>
            
        </table>";
            
            
            echo parent::verInfo();
            echo $historieta;
            

        }

        
        
    
    }


    

    // echo $comic->verInfo();

?>