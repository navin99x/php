<?php

class Records{
    static $counts;

    function __construct(){
        self::$counts++;
    }

    public static function print_count(){
        echo "Total Numbers of object created: " . self::$counts;
    }

    public function __destruct(){
        self::$count--;
    }
}

$obj1 = new Records;
$obj2 = new Records;
$obj3 = new Records;

Records::print_count();