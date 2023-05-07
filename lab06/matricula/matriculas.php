<?php

include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion0;

// Definimos la consulta SQL
$sql = 'SELECT matri.idmatricula, alum.nombres, alum.ape_paterno, alum.ape_materno, cur.curso, matri.codigo FROM matricula AS matri
INNER JOIN curso AS cur ON matri.fkcurso = cur.idcurso INNER JOIN alumno AS alum ON matri.fkalumno = alum.idalumno';

// Ejecjutamos el query en la conexión abierta
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
    <title>Alumnos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Matricula</h1>
        <div class="mb-3">
            <a href="matriculas.html" class="btn btn-primary">Nueva Matricula</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Ape. Paterno</th>
                    <th>Ape. Materno</th>
                    <th>Curso</th>
                    <th>Codigo</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Recorrer el array con el resultado de la consulta
                while($matricula = mysqli_fetch_array($resultado)) {
                    $idmatricula = $matricula['idmatricula'];
                    $nombre = $matricula['nombres'];
                    $ape1 = $matricula['ape_paterno'];
                    $ape2 = $matricula['ape_materno'];
                    $curso = $matricula['curso'];
                    $codigo = $matricula['codigo'];

                    echo '<tr>';
                    echo '<td>' . $idmatricula . '</td>';
                    echo '<td>' . $nombre . '</td>';
                    echo '<td>' . $ape1 . '</td>';
                    echo '<td>' . $ape2 . '</td>';
                    echo '<td>' . $curso . '</td>';
                    echo '<td>' . $codigo . '</td>';
                    echo '<td>
                            <a href="editar_matricula.html" class="btn btn-sm btn-warning mr-2">Editar</a>
                            <a href="eliminar_matricula.html" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>