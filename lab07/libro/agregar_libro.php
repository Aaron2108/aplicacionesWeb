<?php

include('../conexion.php');

// Obtenemos la información del alumno
$año = $_POST['año'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$URL= $_POST['URL'];
$Especialidad=$_POST['especialidad'];
$Editorial=$_POST['editorial'];
// Abrimos la conexión a la base de datos
$conexion = $conexion01;

// Formamos la consulta SQL
$sql = "INSERT INTO libro (año, autor, titulo, URL, especialidad, editorial) VALUES ('$año', '$autor', '$titulo','$URL','$Especialidad', '$Editorial')";

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
    <title>Agregar Libro</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-3">Nuevo Libro</h1>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    <?php
                        if (!$resultado) {
                            echo 'No se ha podido registrar al libro';
                        }
                        else {
                            echo 'Libro registrado';
                        }
                    ?>
                </h3>
                <a href="libro.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>