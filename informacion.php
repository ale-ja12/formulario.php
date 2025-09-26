<?php
$producto1 = $_POST ['Producto 1'];
$precio1 = $_POST ['Precio 1'];
$producto2 = $_POST ['Producto 2'];
$precio2 = $_POST ['Precio 2'];
$producto3 = $_POST ['Producto 3'];
$precio3 = $_POST ['Precio 3'];

echo "<h2>Información recibida de los productos</h2>";
$numeros = array($precio1, $precio2, $precio3);
$suma_total = array_sum($numeros);
echo "El total de la suma es" .$suma_total;
?>
