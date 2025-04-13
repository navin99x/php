<?php

$data= array("country" => "Nepal", "capital" => "kathmandu");

echo array_key_exists("capital", $data);    // 1
echo array_key_exists("capitel", $data);    // null

?>

<!-- Extra:
True value is printed as 1 but for False value nothing get printed.
while using echo; values are implicitly type casted into string. Since true value is represented by 1 which get converted into str '1' and get's printed.
But in the case of false value (0) it's string equivalent became "" i.e, Null.
-->