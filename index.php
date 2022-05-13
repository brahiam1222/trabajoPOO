
<?php

    include_once 'clases.php';



    if ($_POST) {
        
        //enviar datos de un libro
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


    //enviar datos de un libro
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
    
    //crear tabla de libro con los datos enviados
    <table>
        <tr>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Id</th>
            <th>Ilustradores</th>
            <th>Volumen</th>
        </tr>
        <tr>
            <td><?php if($_POST){echo $_POST['autor'];} ?></td>
            <td><?php if($_POST){echo $_POST['titulo'];} ?></td>
            <td><?php if($_POST){echo $_POST['precio'];} ?></td>
            <td><?php if($_POST){echo $_POST['stock'];} ?></td>
            <td><?php if($_POST){echo $_POST['id'];} ?></td>
            <td><?php if($_POST){echo $_POST['ilustradores'];} ?></td>
            <td><?php if($_POST){echo $_POST['volumen'];} ?></td>
            
            
        </tr>
    </table>



    //mostrar datos de un libro
    <?php
    if ($_POST) {
        
        $libro = new Libro($autor, $titulo, $precio, $stock, $id, $ilustradores, $volumen);
        $libro->verInfo();
    }
    ?>





    
</body>
</html>