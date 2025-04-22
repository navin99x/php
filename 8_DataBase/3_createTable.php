<?php

$conn = new mysqli("localhost", "navin", "", "mydb");
if($conn->connect_error) die("Connection Failed" . $conn->connect_error);

$sql = <<< EOQ
create table users(
uid int(6) unsigned auto_increment primary key,
username varchar(30) not null, 
email varchar(30) not null
); 
EOQ;

if($conn->query($sql))  echo "Table sucessfully created";
else echo "error creating table" . $conn->error;

$conn->close();
