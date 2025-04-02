<?php

$value= 10;
$value_ref= & $value;

echo $value_ref;    //10

$value_ref= 40;

echo $value;    //40