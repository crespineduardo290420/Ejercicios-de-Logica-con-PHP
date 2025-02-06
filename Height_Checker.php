<?php
/** *A school is trying to take an annual photo of all the students. The students are asked to stand in a single file line in **non-decreasing order** by height. Let this ordering be represented by the integer array `expected` where `expected[i]` is the expected height of the `ith` student in line.*
*You are given an integer array `heights` representing the **current order** that the students are standing in. Each `heights[i]` is the height of the `ith` student in line (**0-indexed**).*
*Return the **number of indices** where `heights[i] != expected[i]`.**/


function heightChecker($heights) {
    // creando arreglo
    $expected = $heights;
    sort($expected);

    // contando los numeros que no coinciden
    $mismatches = 0;
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $mismatches++;
        }
    }

    return $mismatches;
}


// llamando la funcion
$heights = [1,1,4,2,1,3];
echo heightChecker($heights) . PHP_EOL;  // salida: 3