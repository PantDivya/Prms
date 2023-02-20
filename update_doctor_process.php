<?php
require_once 'database_connect.php';
if (isset($_POST['FirstName'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $Specialist = $_POST['Specialist'];
    $Status = $_POST['IsActive'];
    $id = $_POST['id'];
}

$sql = "UPDATE Doctors SET FirstName='$FirstName', LastName='$LastName', Address='$Address', Contact='$Contact',
 Specialist='$Specialist', IsActive='$Status' WHERE DoctorId=$id"; 

$result = $conn->query($sql);
     if($conn->query($sql)===TRUE){
    header('Location:FetchDoctorTable.php');
    exit();
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>