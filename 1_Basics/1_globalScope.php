<?php
function upgrade_counter(){
    
    global $counter;   // $counter= & $GLOBALS["counter"];
    $counter++;
}

$counter= 0;
upgrade_counter();
upgrade_counter();

echo $counter;
?>

<!--
Global variable in php acts differently than in other programming language.
In PHP, a global variable are accessible throughout the program but in functional block they aren't accessible by default.
To access those global variable we can use any of the approach show above.
-->