<?php

include('../conexion.php');

// Obtenemos la información del alumno
// Obtenemos el ID del alumno a borrar
$idmatricula = $_POST['idmatricula'];
$codigo = $_POST['codigo'];
// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql ="UPDATE matricula SET codigo =$codigo WHERE idmatricula = $idmatricula";

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
    <a href="matriculas.php">Regresar</a>
    <?php
if (!$resultado) {
    echo 'No se ha podido editar la matricula';
}
else {
    echo 'Matricula editado';
}

?>
</body>
</html>