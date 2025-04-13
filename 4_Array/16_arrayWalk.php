<?php

// array_walk(array &$array, callable $callback [, mixed $userdata])

$nums = range(1,5);
array_walk($nums, fn(&$value, $key) => $value **= 2);   // Note: key can't be passed by reference.

print_r($nums);

// similar function array_map() but it return the new array insted of modifying the existing one