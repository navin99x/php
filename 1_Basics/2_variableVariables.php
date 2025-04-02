<?php

$identity= "adult";
$$identity= "man";

echo "\$identity= " . $identity . "\n";
echo "\$\$identity= " . $$identity . "\n";
echo "\$adult= " . $adult . "\n";


$x= 'y';
$y= 'z';
$z= "WTF Happened";

echo $$$x;

?>

<!--
This concept in PHP is known as variable variables which allow to either create or access variable using value of another variable.
This particular concept is often discouraged. 
-->