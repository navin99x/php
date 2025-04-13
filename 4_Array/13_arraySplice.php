<?php

// $removed = array_splice(array, start [, length [, replacement ] ])
// usecase: remove, replace, insert

$country= ["russia", "germany", "north korea", "china", "cuba", "usa"];

// array_splice($country, 3, 1);  // removes "china"
// array_splice($country, -1, 1);   // removes last element
// array_splice($country, 0, 1);    // removes first element 
// array_splice($country, sizeof($country)-2);  // removes last 2 elements
// array_splice($country, 0, 2);   // remove first 2 elements

// array_splice($country, 0, 0, "turkey");  // add turkey to "first"
// array_splice($country, sizeof($country), 0, array("qatar", "vietnam"));  // appends given array list on the end
// array_splice($country, 0, 1, "thailand");   // replace first element with "thailand"
// array_splice($country, 1, 0, array("india", "pakistan"));   // add given array onto the index starting from 1

// print_r($country);

$removed = array_splice($country, sizeof($country)-2);   // array_splice() returns the removed element of array as an array
print_r($removed);