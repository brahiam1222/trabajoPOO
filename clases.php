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
    
        $informacion = "<table>
        <tr>
            <th>ISBN</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Precio</th>
            <th>Stock</th>
            
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

$libro1 = new Libro("J.R.R. Tolkien", "El señor de los anillos", "50", "10", "978-0547928216", "J.R.R. Tolkien", "3");

// $comic = new Comic("John Smith", "Harry Potter", "50", "10", "978-0547928216", "Harry Potter", "3");



// echo $libro1->verInfo();








?>