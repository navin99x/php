<?php

class Person{
    private $name, $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function check_eligiblity(){
        return $this->age >= 18;
    }

    public function display_data(){
        echo "Name: " . $this->name;
        echo "\n";
        echo "Age: " . $this->age;
    }
}

$obj1 = new Person("ram", 18);

// $obj1->display_data();

if($obj1->check_eligiblity()):
    echo "Eligible";
else:
    echo "Not eligible";
endif;


// $obj1->newvalue= "hello";   // Deprecated