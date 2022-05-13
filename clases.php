<?php

//clase de libros
class Libro{
    private $autor;
    private $titulo;
    private $precio;
    private $stock;
    private $id;


    //constructor de la clase libro que muestra los datos de un libro
    public function __construct($autor, $titulo, $precio, $stock, $id, $ilustradores, $volumen){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->id = $id;
        $this->ilustradores = $ilustradores;
        $this->volumen = $volumen;



}


    //funcion que muestra los datos de un libro
    public function verInfo(){

        if($this->ilustradores != null){
            echo "Autor: ".$this->autor."<br>";
            echo "Titulo: ".$this->titulo."<br>";
            echo "Precio: ".$this->precio."<br>";
            echo "Stock: ".$this->stock."<br>";
            echo "Id: ".$this->id."<br>";
            echo "Ilustradores: ".$this->ilustradores."<br>";
            echo "Volumen: ".$this->volumen."<br>";
            echo "Es un Comic";
            echo "<br>";
        }else{
            echo "Autor: ".$this->autor."<br>";
            echo "Titulo: ".$this->titulo."<br>";
            echo "Precio: ".$this->precio."<br>";
            echo "Stock: ".$this->stock."<br>";
            echo "Id: ".$this->id."<br>";
            echo "Es un Libro";
            echo "<br>";
        }

        
    }

    
}
// clase que hereda de la clase libro   
class Comic extends Libro{
    private $ilustradores;
    private $volumen;
    
}












?>