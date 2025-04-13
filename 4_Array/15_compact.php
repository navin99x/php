<?php

$name= "alice"; 
$age= 24; 
$city= "borderland";

// $keys= ["name", "age", "city"];
// $data= compact($keys);

//or

$data= compact("name", "age", "city");  // for any undefined variable it is simply ignored.

print_r($data);

/*
Array
(
    [name] => alice
    [age] => 24
    [city] => borderland
)
*/