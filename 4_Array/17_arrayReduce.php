<?php

$even = [2, 4, 6, 8, 10];
$sum = array_reduce($even, function($carry, $item) {
    return $carry + $item;
}, 0);
echo $sum;  // 30