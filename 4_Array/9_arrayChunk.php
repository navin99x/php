<?php

$values= range(1, 14);

list($a1, $a2, $a3) = array_chunk($values, 5);

// print_r($a1);
print_r($a3);