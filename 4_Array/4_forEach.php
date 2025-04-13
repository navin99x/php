<?php

function print_ai($ai){

    foreach($ai as $key => $value){     // used to traverse the array
        echo "$key : $value \n";
    }
}

$ai= [
    "name" => "deepseek",
    "model" => "r1",
    "release year" => 2025,
    "country" => "china"
];

print_ai($ai);