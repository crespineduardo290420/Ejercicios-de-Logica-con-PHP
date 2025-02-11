<?php

function fizzBuzz($n){
    $array = [];
    
    for($i=1; $i <= $n; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            array_push($array, 'FizzBuzz');
       } else if($i %3 == 0){
        array_push($array, 'Fizz');
      } else if($i % 5 == 0){
        array_push($array,'Buzz');
      }else{
        array_push($array, $i);
      }
    }
    print_r($array);
}

fizzBuzz(15); 

function insetionSort1($n, $arr){
    for($i=0; $i < $n; $i++){//4
        $interception_point = $arr[$i];//3
        $j = $i-1;//3
        while($j >= 0 && $interception_point < $arr[$j]){//8
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $interception_point;
            $j--;      
            echo implode(" ", $arr) . "\n";  
        }
        echo implode(" ", $arr) . "\n";  
        
    }
    
}

insetionSort1(5,[2,4,6,8,3])

?>