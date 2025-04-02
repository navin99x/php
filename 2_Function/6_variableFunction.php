<?php

function sum($val1, $val2) {
    return $val1 + $val2;
}

function diff($val1, $val2) {
    return $val1 - $val2;
}

function mul($val1, $val2) {
    return $val1 * $val2;
}

$operation= "sum";
echo $operation(10, 20);

echo "\n";

$operation= "diff";
echo $operation(100, 60);
echo "\n";

$operation = "mul";
if(function_exists($operation))     // better approach to prevent probable errors
    echo $operation(2,3);
?>

<!--
Variable function allow to call a function through a variable on which the name of the function is stored.
Usecase: when you need to call existing function dynamically
-->