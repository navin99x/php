<?php

$even  = [2, 4, 6, 8, 10];

echo in_array(6, $even) ? "6 is present" : "6 is not present";  // 6 is present
echo "\n";
echo in_array(7, $even) ? "7 is present" : "7 is not present";  // 7 is not present

echo "\n";

echo array_search(6, $even);  // 2
echo "\n";
echo array_search(7, $even);  //  // empty string