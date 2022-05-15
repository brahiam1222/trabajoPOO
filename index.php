
<?php

    
    include_once 'comic.php';



    if ($_POST) {
        
        
        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $id = $_POST['id'];
        $ilustradores = $_POST['ilustradores'];
        $volumen = $_POST['volumen'];
    
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>


    
    <form action="index.php" method="post">
        <input type="text" name="autor" placeholder="Autor">
        <input type="text" name="titulo" placeholder="Titulo">
        <input type="text" name="precio" placeholder="Precio">
        <input type="text" name="stock" placeholder="Stock">
        <input type="text" name="id" placeholder="Id">
        <input type="text" name="ilustradores" placeholder="Ilustradores">
        <input type="text" name="volumen" placeholder="Volumen">
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    
    if ($_POST) {
        

        if ($_POST['ilustradores'] || $_POST['volumen']) {
            
            $comic = new Comic($autor, $titulo, $precio, $stock, $id, $ilustradores, $volumen);
            echo $comic->verInfo();
            echo "Es un Comic";
            
        } else {
            
            $libro = new Libro($autor, $titulo, $precio, $stock, $id);
            echo $libro->verInfo();
            echo "Es un Libro";
            
            
        }
    }



        ?>






    
</body>
</html>