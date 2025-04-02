<?php

$scores= [20, 30, -10, 11, 44, 32];
// $asc= TRUE;
$asc= FALSE;

usort($scores, function($a, $b) use($asc){
    if($asc) return $a - $b;
    else return $b - $a;
});

print_r($scores);
?>

<!--
    - Anonymous function is a inline function with no name.
    - Important concept of anonymous function is variable capture. `use` keyword is used to capture the variable outside the anonymous    functional scope and make it accessible inside the function.
    - Variable is captured by value(default), but can be changed to capture by reference as well. ` use(&$asc, ...);`
    - Key distinction betn `global` and `use` is that `global` is used to access a global variable while `use` allow to access var from parent scope only in anonymous function.
    Note: Better Alternative is to use Arrow function.
-->
