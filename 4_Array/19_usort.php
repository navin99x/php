<?php

$values= [-1, 3, 0, 9, -2, 5, 4, 7];

usort($values, fn($a, $b) => abs($a) <=> abs($b));

print_r($values);  // [0, -1, -2, 3, 4, 5, 7, 9]  // Sorted by absolute values

?>

<!-- use uasort() for associative arrays based on value-->
<!-- use uksort() for associative arrays based on index-->