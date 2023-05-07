<?php

include('../conexion.php');

// Obtenemos la información del alumno
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql = "INSERT INTO profesor (nombre, apellido) VALUES ('$nombre', '$apellido')";

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
    <title>Agregar Profesor</title>
</head>
<body>
    <h1>Nuevo Profesor</h1>
    <h3>
    <?php
        if (!$resultado) {
            echo 'No se ha podido registrar al profesor';
        }
        else {
            echo 'Profesor registrado';
        }
    ?>
    </h3>
    <a href="profesor.php">Regresar</a>
</body>
</html>