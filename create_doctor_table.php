<?php
require_once 'database_connect.php';
//sql to create table
$sql = "CREATE TABLE Doctors(
    DoctorId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    Contact VARCHAR(15) NOT NULL,
    Specialist VARCHAR(40) NOT NULL,
    IsActive BOOLEAN

)";

if($conn->query($sql)===TRUE){
    // echo "Table Doctor created sucessfully";
} else{
    echo "Error creating Table" . $conn->error;
}

?>