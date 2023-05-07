<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$id = $_POST['id'];

// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql ="DELETE FROM alumno WHERE idalumno = $id";

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
    <title>Borrar Alumno</title>
</head>
<body>
    <a href="alumnos.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido borrar al alumno';
}
else {
    echo 'Alumno borrado';
}

?>
</body>
</html>