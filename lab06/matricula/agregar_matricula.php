<?php

include('../conexion.php');

// Obtenemos la información del alumno
$id = $_POST['id'];
$idcurso = $_POST['idcurso'];
$codigo = $_POST['codigo'];

// Abrimos la conexión a la base de datos
$conexion = $conexion0;

// Formamos la consulta SQL
$sql = "INSERT INTO matricula (fkalumno, fkcurso, codigo) VALUES ($id, $idcurso, $codigo)";


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
    <title>Agregar Matricula</title>
</head>
<body>
    <h1>Nueva Matricula</h1>
    <h3>
    <?php
        if (!$resultado) {
            echo 'No se ha podido registrar la matricula';
        }
        else {
            echo 'Matricula registrado';
        }
    ?>
    </h3>
    <a href="matriculas.php">Regresar</a>
</body>
</html>