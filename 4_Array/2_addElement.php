<?php

$values= [10, 20, 30, 40];
$values[]= 50;

print_r($values);

/*
Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => 40
    [4] => 50
)
*/

$data= [
    "first" => 100,
    "second" => 80
];
$data[]= 70;

print_r($data);

/*
Array
(
    [first] => 100
    [second] => 80
    [0] => 70
)
*/