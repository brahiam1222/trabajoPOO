
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>POO</title>
</head>
<body>

<div class="container container-md">
    <div class="col align-self-center">

        <form action="index.php" method="post">
            <input class="form-floating mb-3" type="text" name="autor" placeholder="Autor">
            <input class="form-floating mb-3" type="text" name="titulo" placeholder="Titulo">
            <input class="form-floating mb-3" type="text" name="precio" placeholder="Precio">
            <input class="form-floating mb-3" type="text" name="stock" placeholder="Stock">
            <input class="form-floating mb-3" type="text" name="id" placeholder="Id">
            <input class="form-floating mb-3" type="text" name="ilustradores" placeholder="Ilustradores">
            <input class="form-floating mb-3" type="text" name="volumen" placeholder="Volumen">
            <input class="form-floating mb-3" type="submit" value="Enviar">
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
    </div>
</div>






    
</body>
</html>