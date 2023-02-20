<?php
require_once 'database_connect.php';
//sql to create table
$sql = "CREATE TABLE Logins(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL
)";

if($conn->query($sql)===TRUE){
    echo "Table Login created sucessfully";
} else{
    echo "Error creating Table" . $conn->error;
}
?>