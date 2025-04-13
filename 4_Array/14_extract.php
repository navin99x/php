<?php

// extract(array[, flags, prefix])
// flags: EXTR_OVERWRITE, EXTR_SKIP, EXTR_PREFIX_SAME, EXTR_PREFIX_ALL(preferred), EXTR_PREFIX_INVALID, EXTR_PREFIX_IF_EXISTS, EXTR_IF_EXISTS

$details= [
    "name" => "alice",
    "age" => 24,
    "city" => "borderland"
];

// extract($details);   // Default flag is EXTR_OVERWRITE which will overwrite any existing variable if present.
// echo "Name: {$name}, Age: {$age}, City: {$city}";

extract($details, EXTR_PREFIX_ALL, "ws");
echo "Name: {$ws_name}, Age: {$ws_age}, City: {$ws_city}";
