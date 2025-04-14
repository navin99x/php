<?php

class Rectangle{
    protected $length, $breadth;

    public function __construct($length, $breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function calculate_area(){
        return $length * $breadth;
    }

    public function calculate_perimeter(){
        return 2 * ($length + $breadth);
    }
}

$obj = new class(4, 3) extends Rectangle{
    public function calculate_diagnol_length(){
        return sqrt(pow($this->length, 2) + pow($this->breadth, 2));
    }
};

echo $obj->calculate_diagnol_length();

# anonymous classes are used to implement interfaces, extend existing classes, or define new properties and methods on the fly.