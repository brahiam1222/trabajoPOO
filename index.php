
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

        $datos = array(
            'autor' => $autor,
            'titulo' => $titulo,
            'precio' => $precio,
            'stock' => $stock,
            'id' => $id,
            'ilustradores' => $ilustradores,
            'volumen' => $volumen
        );
            if($ilustradores != "" || $volumen != ""){

                $lista = 'comic.json';
            }else{
                $lista = 'libro.json';
            }
            $jsonAnterior = file_get_contents($lista);
            $jsonActual = json_decode($jsonAnterior, true);
            $jsonActual[] = $datos;
            $jsonActual = json_encode($jsonActual);
            file_put_contents($lista, $jsonActual);

    
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
            <input class="form-floating mb-3" type="text" name="autor" required placeholder="Autor">
            <input class="form-floating mb-3" type="text" name="titulo" required placeholder="Titulo">
            <input class="form-floating mb-3" type="text" name="precio" required placeholder="Precio">
            <input class="form-floating mb-3" type="text" name="stock" required placeholder="Stock">
            <input class="form-floating mb-3" type="text" name="id" required placeholder="Id">
            <input class="form-floating mb-3" type="text" name="ilustradores" placeholder="Ilustradores">
            <input class="form-floating mb-3" type="text" name="volumen" placeholder="Volumen">
            <input class="form-floating mb-3" type="submit" value="Enviar">
            
        </form>
        
    
        <?php
    

//tabla de comic si tiene ilustrador
        if($_POST){

            echo "<table class='table'>
            <tr>
                <th scope='col'>ISBN</th>
                <th scope='col'>Autor</th>
                <th scope='col'>Titulo</th>
                <th scope='col'>Precio</th>
                <th scope='col'>Stock</th>
                <th scope='col'>Ilustradores</th>
                <th scope='col'>Volumen</th>
            </tr>";
            $lista = 'comic.json';
            $jsonAnterior = file_get_contents($lista);
            $jsonActual = json_decode($jsonAnterior, true);
             if ($jsonActual!=null) {
                
                 foreach ($jsonActual as $key => $value) {
                     echo "<tr>
                     <td>$value[id]</td>
                     <td>$value[autor]</td>
                     <td>$value[titulo]</td>
                     <td>$value[precio]</td>
                     <td>$value[stock]</td>
                     <td>$value[ilustradores]</td>
                     <td>$value[volumen]</td>
                     </tr>";
                    }
                    
                    
                    echo "<table class='table'>
                    <tr>
                        <th scope='col'>ISBN</th>
                        <th scope='col'>Autor</th>
                        <th scope='col'>Titulo</th>
                        <th scope='col'>Precio</th>
                        <th scope='col'>Stock</th>
                    </tr>";
                
                $lista2 = 'libro.json';
                $jsonAnterior2 = file_get_contents($lista2);
                $jsonActual2 = json_decode($jsonAnterior2, true);

                if ($jsonActual2!=null) {
                    
                    foreach ($jsonActual2 as $key2 => $value2) {
                        echo "<tr>
                        <td>$value2[id]</td>
                        <td>$value2[autor]</td>
                        <td>$value2[titulo]</td>
                        <td>$value2[precio]</td>
                        <td>$value2[stock]</td>
                        </tr>";
                }
            }
            
        }
    }
            
                
            
            echo "</table>";


        

        


    
    
    
    ?>
    </div>
</div>






    
</body>
</html>