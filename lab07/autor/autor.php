<?php

include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion01;

// Definimos la consulta SQL
$sql = 'SELECT id, nombre, ape_paterno, ape_materno FROM autor';

// Ejecutamos el query en la conexión abierta
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
  <title>Autor</title>
  <!-- Agregamos el link a los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="mt-3 mb-3">Autores</h1>
    <div class="row">
      <div class="col-12 mb-3">
        <a class="btn btn-primary" href="agregarautor.html">Nuevo Autor</a>
      </div>
      <div class="col-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombres</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //Recorrer el array con el resultado de la consulta
            while ($autor = mysqli_fetch_array($resultado)) {
              $id = $autor['id'];
              $nombres = $autor['nombre'];
              $ape_paterno = $autor['ape_paterno'];
              $ape_materno = $autor['ape_materno'];

              echo '<tr>';
              echo '<td>' . $id . '</td>';
              echo '<td>' . $nombres . '</td>';
              echo '<td>' . $ape_paterno . '</td>';
              echo '<td>' . $ape_materno . '</td>';
              echo '<td><a class="btn btn-info btn-sm" href="editar_autor.html">Editar</a><a class="btn btn-danger btn-sm" href="eliminar.html">Eliminar</a></td>';
              echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Agregamos el script de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>