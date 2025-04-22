<?php

$connection = new mysqli("localhost", "navin", "", "mydb");
if($connection->connect_error) die("Connection Error " . $connection->connect_error);

$sql = <<<EOQ

create table test(
id int(2) primary key auto_increment,
name varchar(40) not null);

insert into test(name) values ("Shyam");

EOQ;

if($connection->multi_query($sql) === TRUE) echo "Query Sucessfull";
else "Query Unsucessufll";