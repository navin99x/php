<?php

$conn = new mysqli("localhost", "navin", "", "mydb");
if($conn->connect_error) die("Connection Failed " . $conn->connect_error);

$sql = "select * from users;";
$result = $conn->query($sql);


// if($result){
//     if($result->num_rows > 0){
//         echo "<pre>";
//         print_r($result->fetch_all());
//     }
//     else echo "No Data to fetch";
// }
// else echo "error fetching data." . $conn->error;


if($result){
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc())
            echo "id: " . $row["UId"] . "UserName: " . $row["username"] . "Email" . $row["email"];
    }
    else echo "No data to fetch";
}
else echo "error Fetching data" . $conn->error;
$conn->close();

?>