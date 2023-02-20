<?php
require_once 'database_connect.php';
if(isset($_POST['FirstName']))
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $Password = sha1($Password);

    $sql = "INSERT INTO Login(FirstName, LastName,Email, UserName, Password) 
    VALUES('$FirstName','$LastName','$Email','$UserName','$Password')";
    if($conn->query($sql)===TRUE){
        header('Location:FetchDoctorTable.php');
        exit();
        // echo "User Signing In successfull";
    }else{
        ?>
        <script>alert("Error:" . $sql ."</br>". $conn->error);</script>
        <?php
    }
}
else{
    header('Location:signup_form.php');
    exit();
}
?>
