<?php

include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = $conexion01;

// Definimos la consulta SQL
$sql = 'SELECT id, año, autor, titulo, URL, especialidad, editorial FROM libro';

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
    <h1 class="mt-3 mb-3">Libros</h1>
    <div class="row">
      <div class="col-12 mb-3">
        <a class="btn btn-primary" href="agregar_libro.html">Nuevo Libro</a>
      </div>
      <div class="col-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Año</th>
              <th>Autor</th>
              <th>Titulo</th>
              <th>URL</th>
              <th>Especialidad</th>
              <th>Editorial</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //Recorrer el array con el resultado de la consulta
            while ($libro = mysqli_fetch_array($resultado)) {
              $id = $libro['id'];
              $año = $libro['año'];
              $autor = $libro['autor'];
              $titulo = $libro['titulo'];
              $URL = $libro['URL'];
              $Especialidad = $libro['especialidad'];
              $Editorial = $libro['editorial'];

              echo '<tr>';
              echo '<td>' . $id . '</td>';
              echo '<td>' . $año . '</td>';
              echo '<td>' . $autor . '</td>';
              echo '<td>' . $titulo . '</td>';
              echo '<td><a target="_blank" href="' . $URL . '">' . $URL . '</a></td>';
              echo '<td>' . $Especialidad . '</td>';
              echo '<td>' . $Editorial . '</td>';
              echo '<td><a class="btn btn-info btn-sm" href="editar_libro.html">Editar</a><a class="btn btn-danger btn-sm" href="eliminar_libro.html">Eliminar</a></td>';
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