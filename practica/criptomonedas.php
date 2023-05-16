<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptos</title>
</head>
<body>
    <form action="criptomonedas.php" method="post">
        <label for="moneda">Criptos Disponibles</label>
        <select name="moneda" id="moneda">
            <option value="">Seleccione La criptomoneda</option>
            <option value="BTC">Bitcoin</option>
            <option value="ETH">Eter</option>
            <option value="BNB">Binance Coin</option>
            <option value="USDT">Tether</option>
            <option value="SOL">Solana</option>
        </select>

        <label>Ingrese la cantidad</label>
        <input type="number" name="cantidad" placeholder="Ingrese la cantidad a Comprar">

        <label>Ingrese el Precio</label>
        <input type="number" placeholder="Ingrese el precio" name="precio">

        <input type="submit" value="Buy :)">

    </form>
</body>
</html>

<?php
if($_POST){
    $bit = $_POST['moneda'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $math = $cantidad*$precio;
    echo "La compra es de {$bit}, Cantidad: {$cantidad}, Precio {$precio},  TOTAl== {$math}";
}
?>