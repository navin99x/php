<?php

$videos = array("vid1.m4a", "vid21.m4a", "vid12.m4a", "vid7.m4a");

// sort($videos);
// print_r($videos);

/*
Array
(
    [0] => vid1.m4a
    [1] => vid12.m4a
    [2] => vid21.m4a
    [3] => vid7.m4a
)
*/

natsort($videos);       // sort($videos, SORT_NATURAL);
print_r($videos);

/*
Array
(
    [0] => vid1.m4a
    [3] => vid7.m4a
    [2] => vid12.m4a
    [1] => vid21.m4a
)
*/

?>

<!-- for case insensitive natural sort use natcasesort() -->