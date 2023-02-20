<?php
require_once 'database_connect.php';
if(isset($_POST['FirstName']))
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $Specialist = $_POST['Specialist'];
    $Status = $_POST['IsActive'];

    // echo 'Name:'. $FirstName .$LastName.'</br>';
    // echo 'Address:'. $Address.'</br>';
    // echo 'Contact:'. $Contact.'</br>';
    // echo 'Specialist:'. $Specialist.'</br>';
    // echo 'Status:'. $IsActive.'</br>';

    $sql = "INSERT INTO doctors(FirstName, LastName, Address, Contact, Specialist, IsActive) 
    VALUES('$FirstName','$LastName','$Address','$Contact','$Specialist',$Status)";
    if($conn->query($sql)===TRUE){
        header('Location:FetchDoctorTable.php?success= New Doctor Added');
        exit();
    }else{
        ?>
        <script>alert("Error:" . $sql ."</br>". $conn->error);</script>
        <?php
    }
}
else{
    header('Location:form_add_doctor.php');
    exit();
}
?>
