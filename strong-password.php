<?php
function minimumNumber($n, $password) {
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";
    
    $hasDigit = $hasLower = $hasUpper = $hasSpecial = false;
    
    for ($i = 0; $i < $n; $i++) {
        if (strpos($numbers, $password[$i]) !== false) $hasDigit = true;
        if (strpos($lower_case, $password[$i]) !== false) $hasLower = true;
        if (strpos($upper_case, $password[$i]) !== false) $hasUpper = true;
        if (strpos($special_characters, $password[$i]) !== false) $hasSpecial = true;
    }
    
    $missingTypes = 0;
    if (!$hasDigit) $missingTypes++;
    if (!$hasLower) $missingTypes++;
    if (!$hasUpper) $missingTypes++;
    if (!$hasSpecial) $missingTypes++;
    
    return max($missingTypes, 6 - $n);
}

// Leer la entrada
$n = intval(trim(fgets(STDIN)));
$password = trim(fgets(STDIN));

echo minimumNumber($n, $password) . "\n";
?>