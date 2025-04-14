<?php

// There might be a condition where a class uses multiple traits. In such case if two traits have same method name then we can make use of `insteadof` and `as` keyword to resolve the issue.

trait FirstTrait{
    public function display(){
        echo "Display function from FirstTrait";
    }
}

trait SecondTrait{
    public function display(){
        echo "Display function from SecondTrait";
    }
}

class Demo{
    use FirstTrait, SecondTrait{
        FirstTrait::display insteadof SecondTrait;
        SecondTrait::display as write;
    }

}

$obj = new Demo;

$obj->display();    // Display function from FirstTrait

echo "\n";

$obj->write();      // Display function from SecondTrait