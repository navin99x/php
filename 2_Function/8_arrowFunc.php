<?php

// synatx: fn($args, ...) => return (expression)

$natural_nums= [1, 2, 3, 4, 5];
$square_nums= array_map(fn($n) => $n**2, $natural_nums);
print_r($square_nums);

?>

<!--
Main distinction between closure and arrow function is that, the arrow function automatically capture the variable by value(not possible to capture by reference) from the surrounding scope.

IMP Note: Variable capture construct is only able to capture variable from immediate parent scope and can't from higher-level scope beyond parent.
-->