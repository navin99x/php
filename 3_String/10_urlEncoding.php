<?php

$base_url= "https://www.youtube.com/results?search_query=";
$query= "How to hack Youtube?";


$encoded_query= rawurlencode($query);

$encoded_url = $base_url . $encoded_query;

// echo $encoded_url;   //https://www.youtube.com/results?search_query=How%20to%20hack%20Youtube%3F

// echo rawurldecode($encoded_url);    //https://www.youtube.com/results?search_query=How to hack Youtube?




$encoded_query= urlencode($query);  //used to encode query string

$encoded_url= $base_url . $encoded_query;

// echo $encoded_url;  //https://www.youtube.com/results?search_query=How+to+hack+Youtube%3F

echo urldecode($encoded_url);   //https://www.youtube.com/results?search_query=How to hack Youtube?