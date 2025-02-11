<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }
    
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    
    return array_merge($result, $left, $right);
}

// Ejemplo de uso
$arr = [5, 3, 8, 6, 2, 7, 4, 1];
$sortedArr = mergeSort($arr);
print_r($sortedArr);
?>
