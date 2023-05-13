<?php

include('../conexion.php');

// Obtenemos la información del alumno
$nombre = $_POST['nombre'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];

// Abrimos la conexión a la base de datos
$conexion = $conexion01;

// Formamos la consulta SQL
$sql = "INSERT INTO autor (nombre, ape_paterno, ape_materno) VALUES ('$nombre', '$ape_paterno', '$ape_materno')";

// Ejecutamos la instrucción SQL
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-3">Nuevo Autor</h1>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    <?php
                        if (!$resultado) {
                            echo 'No se ha podido registrar al Autor';
                        }
                        else {
                            echo 'Autor registrado';
                        }
                    ?>
                </h3>
                <a href="autor.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>