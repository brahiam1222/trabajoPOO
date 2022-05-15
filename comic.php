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


            $historieta = "<table>
            <tr>
                <th>Ilustrador</th>
                <th>Volumen</th>
            
            </tr>
            <tr>
            
                <td>$this->ilustradores</td>
                <td>$this->volumen</td>
            
        </table>";
            
            
            echo parent::verInfo();
            echo $historieta;
            

        }
        
    
    }


    $comic = new Comic("John Smith", "Harry Potter", "50", "10", "978-0547928216", "Harry Potter", "3");

    // echo $comic->verInfo();

?>