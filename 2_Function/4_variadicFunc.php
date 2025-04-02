<?php

function sum(){
    if (func_get_args() == 0)
        return false;

    $sum= 0;
    for($i= 0; $i < func_num_args(); $i++)
        $sum += func_get_arg($i);
    
    return $sum;
    
}

$total= sum(10, 20, 30, 40);
echo "Total Sum = {$total}";

?>

<!--
 to work with variable function parameter PHP provide three functions: 
 func_get_args(); -> array of all parameter
 func_num_args(); -> total number of parameter
 func_get_arg(arg_num); -> return specific argument 

 Note: This approach of variable functional arguments is not recommended. Use splat(...) operator insted.
-->