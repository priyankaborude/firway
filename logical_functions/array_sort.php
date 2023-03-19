<?php

// Questiond : 
// Given an array A[ ] consisting 0s, 1s and 2s. The task is to write a function that sorts the given array. The functions should put all 0s first, then all 1s and all 2s in last.

function sortArray($arr) {
    $low = 0;
    $mid = 0;
    $high = count($arr) - 1;
    
    while ($mid <= $high) {
        if ($arr[$mid] == 0) {
            $temp = $arr[$low];
            $arr[$low] = $arr[$mid];
            $arr[$mid] = $temp;
            $low++;
            $mid++;
        }
        elseif ($arr[$mid] == 1) {
            $mid++;
        }
        elseif ($arr[$mid] == 2) {
            $temp = $arr[$mid];
            $arr[$mid] = $arr[$high];
            $arr[$high] = $temp;
            $high--;
        }
    }
    
    return $arr;
}

$arr = [0, 1, 2, 0, 1, 2];
$sortedArr = sortArray($arr);
print_r($sortedArr); 
// outputs: Array ( [0] => 0 [1] => 0 [2] => 1 [3] => 1 [4] => 2 [5] => 2 )


?>

