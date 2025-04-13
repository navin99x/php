<?php

$year= 2025;
$month= 1;
$day= 30;

$formatted_date= sprintf("%02.2d-%02.2d-%04d", $month, $day, $year);    //printf() but instead of priniting it to console it just return formatted value.

print($formatted_date);