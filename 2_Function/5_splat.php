<?php

// variadic operator

function print_data(...$data){
    foreach($data as $key => $value){
        echo "$key: $value";
        echo "\n";
    }
}

$data= array(
    "name" => "Hari Bhakta",
    "age" => 20,
    "profession" => "Student"
);

print_data(...$data);

?>

<!--
More on variadic operator: 
    If the array element is of same type you can provide type hint: 
        function func1(int ...array){
    Mixing fixed and variable argument.
-->