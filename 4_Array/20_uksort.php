<?php

$data = array(
    "hari" => 23,
    "shyam" => 21, 
    "ram" => 40,
    "hattori" => 41
);

uksort($data, fn($a, $b) => (strlen($a)> strlen($b) ? 1 : (strlen($a) == strlen($b) ? 0 : -1)));
print_r($data);