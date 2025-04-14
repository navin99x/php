<?php

// trait is used to overcome the limitation of single level inheritance in php.
// it allow to define method, properties, abstract method and static(method and properties.) that multiple classes can use.

trait Log{
    public $user = "root";

    public function logError($msg){
        echo "Error: {$msg}";
    }
}

class Application{
    use Log;
    private $version;

    public function __construct($version){
        $this->version = $version;
    }
}

$obj = new Application(2.1);

// $obj->logError("Internal Server Error!!");

echo "\$user: {$obj->user}";

?>

<!--A class can use multiple traits if needed-->