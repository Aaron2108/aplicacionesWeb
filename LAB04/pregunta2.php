<?php
                
        $nombres = $_POST['nombres'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styleform.css">
    <title>pregunta2</title>
</head>
<body>
    <div class="form2">
    <form action="pregunta2.html" method="post">
        <h1>Bienvenido</h1>
    <p><?php  echo "!hola ".$nombres."!"?></p><br>
    <p><?php  echo "Tu direccion es ".$direccion?></p><br>
    <p><?php  echo "Tienes ".$edad." años y tu correo es ".$email?></p><br>
    <button type="submit" class="btn btn-primary">Regresar</button>
    </form>
    </div>
</body>
</html>