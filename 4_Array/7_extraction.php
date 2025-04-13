<?php

$data= array("Nepal", "kathmandu");

list($ctry, $capital)= $data;       // works with zero indexed array

echo "{$capital} is the capital of {$ctry}";

?>

<!--
If you have more value in array than in list, then remaning values are simply ignored.
If you have more value in list than in array, then the extra variable are set to NULL.
-->