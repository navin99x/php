<?php

class User{
    protected $username, $password;

    function __construct($username, $pass){
        $this->username = $username;
        $this->password = $pass;
    }

    public function perform(){
        echo "{$this->username} performed a basic action. \n";
    }
}

class Admin extends User{
    
    // con constructor required in this case.
    function __construct($username, $pass){
        parent::__construct($username, $pass);
    }

    public function perform(){
        echo "{$this->username} performed a privilege action. \n";
    }
}

$user1 = new User("ram", "ram123");
$admin1 = new Admin("hari", "hari123");


$user1->perform();
$admin1->perform();

?>

<!-- PHP only supports single level inheritance -->