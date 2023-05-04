<?php
    $tarifa = $_POST["tarifa"];
    $dias = $_POST["dias"];
    $importeBruto = $tarifa * $dias;
    $importeDescuento = 0.15 * $importeBruto;
    $importeNetoPagar = $importeBruto - $importeDescuento;
    $lapiceros = 3 * $dias;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 3</title>
</head>
<body>
<?php echo "El importe bruto es: ".$importeBruto?><br>

<?php echo "El importe descuento es: ".$importeDescuento?><br>

<?php echo "El importe neto a pagar es: ".$importeNetoPagar?><br>

<?php echo "La cantidad de lapiceros a recibir es: ".$lapiceros?><br>

</body>
</html>