<!-- There are three diferent ways to coneect MySql with PHP code-->



<?php

$servername = "localhost";
$username = "navin";
$password = "";
$database = "records";

// MySQLi (Procedural)

// $conn = mysqli_connect($servername, $username, $password, $database);
// if (!$conn) die("Connection failed: " . mysqli_connect_error($conn));
// echo "Connected successfully";
// mysqli_close($conn);


// MySQLi (OOP)

// $conn = new mysqli($servername, $username, $password);
// if($conn->connect_error) die("connection failed " . $conn->connect_error);
// echo "Connection sucessfull";
// $conn->close();


// PDO

try{
    $conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Sucessfull";
}
catch(PDOException $e){
    echo "Connection Failed " . $e->getMessage();
}
?>
