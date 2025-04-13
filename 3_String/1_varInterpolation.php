<!-- Variable interpolation is the process of replacing a variable with their content inside a string.-->
<?php

$name= "Sundari";
$mammals= "Gorilla";
$position= 4;

// $text1= "Hello $name, You belong to $mammals kingdom.";
// $text2= "what up $name , the top $positionth of the $mammals species."; // error as it try to print $positionth.
$text2= "what up {$name}, the top {$position}th of the {$mammals} species.";    // better approach

echo $text2;