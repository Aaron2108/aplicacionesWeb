<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $importe = $precio * $cantidad;
    $primerDescuento = $importe * 0.05;
    $segundoDescuento = $importe - $primerDescuento;
    $importeDescuentoTotal = $primerDescuento + $segundoDescuento;
    $importePagar = $importe - $importeDescuentoTotal;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pregunta 4</title>
</head>
<body>
    <h5>4.	Una tienda ha puesto en oferta la venta de conos de CD de 100 unidades ofreciendo dos descuentos de 5%. El primer descuento se aplica al importe de la compra. El segundo descuento se aplica a la resta del importe de la compra menos el importe del primer descuento. Dados el precio del cono y la cantidad de conos adquiridos, diseñe un programa que determine el importe de la compra, el importe del descuento total y el importe a pagar </h5>
<?php echo "El importe de la compra es: ".$importe?><br>

<?php echo "El importe del descuento total es: ".$importeDescuentoTotal?><br>

<?php echo "El importe de la compra a pagar es: ".$importePagar?><br>
</body>
</html>