<?php
function aVeryBigSum($ar) {
    return array_sum($ar);
}

// Entrada de muestra
$n = 5;
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

// Calcular la suma
$resultado = aVeryBigSum($ar);

// Imprimir el resultado
echo $resultado;
?>