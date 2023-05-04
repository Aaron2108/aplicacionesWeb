<?php
    $importe = $_POST['importe'];
    $hijos = $_POST['hijos'];
    $comision = 0.075 * $importe;
    $bonificacion = 50 * $hijos;
    $sueldoBruto = 600 +$comision + $bonificacion;
    $descuento = $sueldoBruto * 0.11;
    $sueldoNeto = $sueldoBruto - $descuento;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php echo "Su comision es: ".$comision?><br>
<?php echo "Su bonificacion es: ".$bonificacion?><br>
<?php echo "Su sueldo bruto es: ".$sueldoBruto?><br>
<?php echo "Su descuento es: ".$descuento?><br>
<?php echo "Su sueldo neto es: ".$sueldoNeto?><br>
</body>
</html>