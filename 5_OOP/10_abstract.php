<?php

abstract class Animal{
    private $name;

    public function __construct($name){$this->name = $name;}

    abstract public function makeSound();

    public function sleep(){
        echo "{$this->name} is Sleeping \n";
    }
}

Class Sheep extends Animal{
    public function makeSound(){
        echo "BaaaA BaaaA !!!";
    }
}

$obj = new Sheep("Sethye");
$obj->makeSound();

?>

<!--
Concept of interface and abstract sounds same, so here's a short differences:
    Abstract class acts a base class where as Interface only define contract or blueprint for other classes.
    Abstract class can contain concreate as well as abstract method and properties, where as interface can only contain abstract method.
-->