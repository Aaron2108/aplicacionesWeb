<?php

include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion0;

// Definimos la consulta SQL
$sql = 'SELECT cur.idcurso, pro.nombre, cur.curso FROM profesor AS pro INNER JOIN curso AS cur ON pro.idprofesor = cur.fkprofesor';

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
        <h1>Cursos</h1>
        <div class="mb-3">
            <a href="cursos.html" class="btn btn-primary">Nuevo Curso</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Profesor</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Recorrer el array con el resultado de la consulta
                while($curso = mysqli_fetch_array($resultado)) {
                    $idcurso = $curso['idcurso'];
                    $nombre = $curso['nombre'];
                    $curso = $curso['curso'];

                    echo '<tr>';
                    echo '<td>' . $idcurso . '</td>';
                    echo '<td>' . $nombre . '</td>';
                    echo '<td>' . $curso . '</td>';
                    echo '<td>
                            <a href="editar_curso.html" class="btn btn-sm btn-warning mr-2">Editar</a>
                            <a href="eliminar_curso.html" class="btn btn-sm btn-danger">Eliminar</a>
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