<?php
// Example of sort() function
$numbers = array(4, 2, 8, 6);
sort($numbers);
echo "Sorted numbers: ";
print_r($numbers);

// Example of rsort() function
$fruits = array("banana", "apple", "cherry", "date");
rsort($fruits);
echo "Reverse sorted fruits: ";
print_r($fruits);
?>

<!-- use asort() and arsort() for associative arrays based on value-->
<!-- use ksort() and krsort() for associative arrays based on key-->
<!-- list of flags you can use: sort_asc, sort_desc, sort_numeric, sort_string, sort_flag_case, sort_regular, sort_natural) -->