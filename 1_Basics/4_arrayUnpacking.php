<?php

$even= [2, 4, 6, 8];
$odd = [1, 3, 5, 7];

$new_array= array(...$even, ...$odd);

print_r($new_array);

?>

<!--
Spread operator (...) can be used to perform array unpacking that allow to pass the element of array to function, constructor or merge arrays.
-->