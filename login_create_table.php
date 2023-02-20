<?php
require_once 'database_connect.php';
//sql to create table
$sql = "CREATE TABLE Login(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(70) NOT NULL,
    UserName VARCHAR(50) NOT NULL,
    Password VARCHAR(100) NOT NULL
)";

if($conn->query($sql)===TRUE){
    echo "Table Login created sucessfully";
} else{
    echo "Error creating Table" . $conn->error;
}
?>