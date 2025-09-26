<?php
$producto1 = $_POST ['producto1'];
$precio1 = $_POST ['precio1'];
$producto2 = $_POST ['producto2'];
$precio2 = $_POST ['precio2'];
$producto3 = $_POST ['producto3'];
$precio3 = $_POST ['precio3'];

echo "<h2>Información recibida de los productos</h2>";
$numeros = array($precio1, $precio2, $precio3);
$suma_total = array_sum($numeros);
echo "El total de la suma es" .$suma_total;
?>
