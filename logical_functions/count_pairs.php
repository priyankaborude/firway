<?php

// Question :

// Explanation:Given an array arr[ ] of size N, and integers L and R, the task is to count the number of pairs [arri , arrj] such that i < j and the product of arr[i] * arr[j] lies in the given range [L, R], i.e. L ≤ arr[i] * arr[j] ≤ R.

function countPairsInRange($arr, $L, $R) {
    $count = 0;
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $product = $arr[$i] * $arr[$j];
            if ($product >= $L && $product <= $R) {
                $count++;
            }
        }
    }
    return $count;
}

$arr = [2, 4, 6, 8, 10];
$L = 15;
$R = 80;
$count = countPairsInRange($arr, $L, $R);
echo "Number of pairs with product in [$L, $R] range: " . $count; // Output: Number of pairs with product in [15, 80] range: 4

?>