<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $nuevoPrecio= $precio - (0.05 *$precio);
    $importeCompra = $precio * $cantidad;
    $importeDescuento = $importeCompra * 0.07;
    $importePagar = $importeCompra - $importeDescuento;
    $obsequio = 2 * $cantidad;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 2</title>
</head>
<body>
<?php echo "El nuevo precio de la gaseosa es: ".$nuevoPrecio?><br>
<?php echo "El importe de la compra es: ".$importeCompra?><br>
<?php echo "El importe del descuento es: ".$importeDescuento?><br>
<?php echo "El importe a pagar es: ".$importePagar?><br>
<?php echo "La cantidad de obsequio es: ".$obsequio?><br>
</body>
</html>