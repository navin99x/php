<?php

// array_pad(array, size, value) => array

$old_array= [10, 20, 30];

print_r(array_pad($old_array, 5, "-99"));

/*
Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => -99
    [4] => -99
)
*/

print_r(array_pad($old_array, -5, "0"));

/*
(
    [0] => 0
    [1] => 0
    [2] => 10
    [3] => 20
    [4] => 30
)
*/

// print_r(array_pad($old_array, 2, 0));   // return original array