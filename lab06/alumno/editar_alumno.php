<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$idalumno = $_POST['idalumno'];
$nombres = $_POST['nombres'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql ="UPDATE alumno SET nombres='$nombres', ape_paterno='$ape_paterno', ape_materno='$ape_materno' WHERE idalumno = $idalumno";

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
    <title>Alumno UPDATE</title>
</head>
<body>
    <a href="alumnos.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar al alumno';
}
else {
    echo 'Alumno editado';
}

?>
</body>
</html>