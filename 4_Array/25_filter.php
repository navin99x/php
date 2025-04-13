<?php

$natural_number = range(1, 10);

$odd_numbers = array_filter($natural_number, fn($n) => $n%2);

print_r($odd_numbers);