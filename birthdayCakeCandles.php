<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    $tallestCandle=0;
    $candleCounter=0;
    for ($i=0; $i<count($candles);$i++){
        if ($candles[$i]>$tallestCandle){
            $tallestCandle=$candles[$i];
            $candleCounter=1;
        } else if ($candles[$i]==$tallestCandle){
            $candleCounter++;
        }
    }
    return $candleCounter;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
