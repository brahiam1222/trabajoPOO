<?php


class Libro{
    private $autor;
    private $titulo;
    private $precio;
    private $stock;
    private $id;


    
    public function __construct($autor, $titulo, $precio, $stock, $id){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->id = $id;



    }
    public function verInfo(){

        
    
        $informacion = "<table class='table'>
        <tr>
            <th scope='col'>ISBN</th>
            <th scope='col'>Autor</th>
            <th scope='col'>Titulo</th>
            <th scope='col'>Precio</th>
            <th scope='col'>Stock</th>
            
        </tr>
        <tr>
            <td>$this->id</td>
            <td>$this->autor</td>
            <td>$this->titulo</td>
            <td>$this->precio</td>
            <td>$this->stock</td>
            
                                    
    
        </table>";
        
        return $informacion;
        
    
    
    
        
    }


    

    
}



// $comic = new Comic("John Smith", "Harry Potter", "50", "10", "978-0547928216", "Harry Potter", "3");



// echo $libro1->verInfo();








?>