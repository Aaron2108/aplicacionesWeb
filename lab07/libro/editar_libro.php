<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$id = $_POST['id'];
$año = $_POST['año'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$URL= $_POST['URL'];
$Especialidad=$_POST['especialidad'];
$Editorial=$_POST['editorial'];
// Abrimos la conexión a la base de datos
$conexion = $conexion01;

// Formamos la consulta SQL
$sql ="UPDATE libro SET año='$año', autor='$autor', titulo='$titulo',URL='$URL',especialidad='$Especialidad',editorial='$Editorial'  WHERE id = $id";

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
    <title>Libro UPDATE</title>
</head>
<body>
    <a href="libro.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar al libro';
}
else {
    echo 'Libro editado';
}

?>
</body>
</html>