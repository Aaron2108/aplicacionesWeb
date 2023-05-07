<?php
$host = "localhost";
$usuario = "root";
$clave = "70976074";
$bd ="lab06";

$conexion0 = mysqli_connect($host,$usuario,$clave,$bd);

if(!$conexion0){
    die("Conexion fallo: ".mysqli_connect_error());
}else{
    echo "Conexion con exito";
}

function desconectar($conn) {
    mysqli_close($conn);}
/*function conectar() {
    $conexion = mysqli_connect('localhost','root','70976074','lab06');
    return $conexion;
}
echo conectar();

function desconectar($conn) {
    mysqli_close($conn);
}*/

?>