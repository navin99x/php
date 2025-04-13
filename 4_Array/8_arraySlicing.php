<?php

$data= array("Nepal", "kathmandu", 69);

list($ctry, $capital)= array_slice($data, 0, 2);    // $subset = array_slice(array, offset(index), length [, bool $preserve_keys);

echo "{$capital} is the capital of {$ctry}";