<?php
require_once 'database_connect.php';
$id = $_GET['id'];
$sql = "DELETE from Doctors where DoctorId=$id";

if($conn->query($sql)===TRUE){
    header('Location:FetchDoctorTable.php?success=Record deleted Successfully');
    exit();
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>