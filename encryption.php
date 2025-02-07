<?php


//https://www.hackerrank.com/challenges/mars-exploration/problem?isFullScreen=true
function marsExploration($s) {
    $count = 0;
    $expected = "SOS";

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $expected[$i % 3]) {
            $count++;
        }
    }

    return $count;
}

// Definir la señal manualmente
$s = "SOSSOT"; // Cambia esto para probar otras señales

echo "Mensaje recibido: \"$s\"\n";
echo "Letras alteradas: " . marsExploration($s) . "\n";

?>