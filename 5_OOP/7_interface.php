<?php

// interface acts as a contract/blueprint for classes that specify methods that a particualr class should implement.

interface Vechicle{
    public function engine();
    public function brake();
    public function accelerator();
    public function sidelight();
}

Class Car implements Vechicle{

    private $model;

    public function __construct($model){
        $this->model = $model;
    }
    
    // Absence of any of these four method results in an error.

    public function engine(){
        echo "{$this->model} has engine.";
    }
    public function brake(){
        echo "{$this->model} has brake.";
    }
    public function accelerator(){
        echo "{$this->model} has accelerator.";
    }
    public function sidelight(){
        echo "{$this->model} has sidelight.";
    }
}


$nano = new Car("Nano");
$nano->engine();