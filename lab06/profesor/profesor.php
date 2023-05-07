<?php
include('../conexion.php');
$conexion = $conexion0;
$sql = 'SELECT idprofesor, nombre, apellido FROM profesor';
$resultado = mysqli_query($conexion, $sql);
desconectar($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-3">Profesores</h1>
        <a href="profesor.html" class="btn btn-primary mb-3">Nuevo profesor</a>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php while($profesor = mysqli_fetch_array($resultado)) { ?>
                <tr>
                    <td><?= $profesor['idprofesor'] ?></td>
                    <td><?= $profesor['nombre'] ?></td>
                    <td><?= $profesor['apellido'] ?></td>
                    <td>
                        <a href="editar_profesor.html" class="btn btn-warning btn-sm mr-2">Editar</a>
                        <a href="eliminar_profesor.html" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
