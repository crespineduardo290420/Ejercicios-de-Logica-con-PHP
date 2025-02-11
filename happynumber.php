<?php
function isHappy($n) {
    $seen = [];
    
    while ($n != 1 && !isset($seen[$n])) {
        $seen[$n] = true;
        $n = sumOfSquares($n);
    }
    
    return $n == 1;
}

function sumOfSquares($num) {
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit * $digit;
        $num = (int)($num / 10);
    }
    return $sum;
}

// Ejemplo de uso
echo isHappy(19) ? 'true' : 'false'; // true
echo "\n";
echo isHappy(2) ? 'true' : 'false'; // false
?>