<?php

// Given an array of integers `nums` which is sorted in ascending order, and an integer `target`, 
// write a function to search `target` in `nums`. If `target` exists, then return its index. Otherwise, return `-1`.

// You must write an algorithm with `O(log n)` runtime complexity.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {

        foreach($nums as $indice => $num){
            if($num == $target){
                    
                return $indice; 
            }
        }
        return -1;
    }
}

        $solucion = new Solution();

        $target = 9;
        $nums = [-1,0,3,5,9,12];  

        $indice = $solucion->search($nums, $target);
        echo "El número $target se encuentra en el índice $indice";


?>
