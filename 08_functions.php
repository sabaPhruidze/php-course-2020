<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums
function sum(...$nums){
    $sum = 0;
 for($i = 0 ; $i < count($nums);$i++){
   $sum += $nums[$i];
 }
 return $sum;
}

echo sum(1,2,3,4,5,6,7);
// Arrow functions
