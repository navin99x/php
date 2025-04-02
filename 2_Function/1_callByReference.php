<?php

// call by reference

function swap(&$val1, &$val2){
    $temp= $val1;
    $val1= $val2;
    $val2= $temp;
}

$a= 10;
$b= 20;

echo "Before swap a= $a, b= $b<br>";
swap($a, $b);
echo "After swap a= $a, b= $b";

?>