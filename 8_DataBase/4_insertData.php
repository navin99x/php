<?php

$connection = new mysqli("localhost", "navin", "", "mydb");
if($connection->connect_error) die("Error connecting to the database " . $connection->connect_error);

$sql = <<< EOQ

insert into users(username, email) values
("ram_poudel", "ram@gmail.com"),
("hari123", "dopehari@hotstar.com"),
("gita_31", "chillgita@pass.in");

EOQ;

if($connection->query($sql)) echo "Data Inserted Sucessfully.";
else echo "Error Inserting Data" . $connection->error;

$connection->close();