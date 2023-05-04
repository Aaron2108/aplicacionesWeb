<?php
       if(isset($_POST["dosnumeros"])){
        $numero = $_POST["dosnumeros"];

        $primer_digito = intval($numero / 10);
        $segundo_digito = $numero % 10;

        if($segundo_digito == 0){
            echo "El segundo dígito no puede ser cero.";
        } else {
            if($primer_digito > $segundo_digito){
                $suma = $primer_digito + $segundo_digito;
                $diferencia = $primer_digito - $segundo_digito;
                echo "La suma de los dígitos es: ".$suma."<br>";
                echo "La diferencia de los dígitos es: ".$diferencia."<br>";
            } else {
                $producto = $primer_digito * $segundo_digito;
                $division = $primer_digito / $segundo_digito;
                echo "El producto de los dígitos es: ".$producto."<br>";
                echo "La división del primer dígito respecto al segundo es: ".$division."<br>";
            }
        }
    }
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
<form action="ejercicio3.html" method="post">
    <button type="submit" class="btn btn-primary">Regresar</button>
    </form>
</body>
</html>