<?php
if (isset($_POST['Email'])) {
    $firstname = $_POST['FirstName'];
    $middlename = $_POST['MiddleName'];
    $lastname = $_POST['LastName'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
    $zip = $_POST['Zip'];
    $mobile = $_POST['Mobile'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $MaritalStatus = $_POST['MaritalStatus'];
    $DOB = $_POST['DOB'];
    $Age = $_POST['Age'];

    $BloodGroup = $_POST['BloodGroup'];
    $BloodMedicalCondition = $_POST['MedicalCondition'];
    $Symptoms = $_POST['Symptoms'];

    $Relation = $_POST['Relation'];
    $GurantorFirstname = $_POST['GurantorFirstname'];
    $GurantorLastname = $_POST['GurantorLastname'];
    $GurantorAddress = $_POST['GurantorAddress'];
    $GurantorCity = $_POST['GurantorCity'];
    $GurantorState = $_POST['GurantorState'];
    $GurantorZip = $_POST['GurantorZip'];
    $GurantorContact = $_POST['GurantorContact'];



    echo "Patient details:</br>";
    echo "First Name: $firstname </br>
Middle Name: $middlename</br>
Last Name: $lastname</br>
Address: $address</br>
City: $city</br>
State: $state</br>
Zip: $zip</br> 
Mobile: $mobile </br>
Phone: $phone </br>
Email: $email </br>
Gender :$Gender</br> 
MaritalStatus: $MaritalStatus </br>
Date of Birth: $DOB</br> 
Age: $Age</br>";
    echo "Medical Information:</br>
BloodGroup: $BloodGroup</br>
BloodMedicalCondition: $BloodMedicalCondition</br>
Symptoms: $Symptoms</br>
Gurantor Information:</br>
Relation: $Relation </br>
GurantorFirstname: $GurantorFirstname </br>
GurantorLastname: $GurantorLastname </br>
GurantorAddress: $GurantorAddress </br>
GurantorCity: $GurantorCity </br>
GurantorState: $GurantorState </br>
GurantorZip: $GurantorZip </br>
GurantorContact:$GurantorContact </br>";
}
else{
    header('Location:user_form.php');
    exit();
}

?>