<?php
        $numero = $_POST['tresnumeros'];

        $primer_digito = intval($numero / 100);
        $segundo_digito = intval(($numero % 100)/10);
        $tercer_digito =  $numero % 10;
        
            if($primer_digito > $segundo_digito && $primer_digito > $tercer_digito){
                
                echo "El mayor es : ".$primer_digito."<br>";
                
            }
            if($segundo_digito > $primer_digito  && $segundo_digito > $tercer_digito){
            echo "El mayor es : ".$segundo_digito."<br>";
            }
            if($tercer_digito > $primer_digito  && $tercer_digito > $segundo_digito){
                echo "El mayor es : ".$tercer_digito."<br>";
                }
            else{
                echo "No ay numero mayor que las otras dos cifras";
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
<form action="ejercicio5.html" method="post">
    <button type="submit" class="btn btn-primary">Regresar</button>
    </form>
</body>
</html>