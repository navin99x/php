<?php

class Circle{
    private $radius;
    public const PI = 3.14;

    function __construct($radius){
        $this->radius = $radius;
    }

    function calculateArea(){
        $area = self::PI * $this->radius * $this->radius;
        echo "Area of a circle of radius {$this->radius} units is : {$area}";
    }
}

$small_circle = new Circle(3);

// $small_circle->calculateArea();

echo "value of PI is " . Circle::PI;