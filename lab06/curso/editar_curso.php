<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$idcurso = $_POST['idcurso'];
$curso = $_POST['curso'];
// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql ="UPDATE curso SET curso='$curso'
WHERE idcurso = $idcurso";

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
    <title>Curso UPDATE</title>
</head>
<body>
    <a href="cursos.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar al curso';
}
else {
    echo 'Curso editado';
}

?>
</body>
</html>