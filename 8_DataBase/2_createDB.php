<?php

$hostname = "localhost";
$username = "navin";
$password = "";

$conn = new mysqli($hostname, $username, $password);
if($conn->connect_error) die("Connection Unsucessufll" . $conn->connect_error);
else echo "Connection Sucessfull\n";

$sql = "CREATE DATABASE MyDB";
if($conn->query($sql)) echo "Database Created Sucessfully";
else echo "Error Creating Database" . $conn->error;