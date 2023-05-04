<?php

                 //Recibir informacion del formulario html (Metodo POST)
                $primer=$_POST['primernumero'];
                $segundo=$_POST['segundonumero'];
                $tercer=$_POST['tercernumero'];
                $cuarto=$_POST['cuartonumero'];
                $suma = $primer + $segundo;
                $producto= $tercer * $cuarto;
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>
        <?php echo "La suma de los dos primeros numeroes es: ".$suma."</br>"." Su producto del tercero y cuarto es: ".$producto;
        ?>
    </h1>
    <form action="ejercicio2.html" method="post">
    <button type="submit" class="btn btn-primary">Regresar</button>
    </form>
</body>
</html>