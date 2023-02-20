<?php
require_once 'database_connect.php';
//sql to create table
$sql = "CREATE TABLE Patients(
    PatientId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Age INT(10) NOT NULL,
    BloodGroup VARCHAR(15) NOT NULL,
    COntact VARCHAR(50) NOT NULL,
    Guardian VARCHAR(100) NOT NULL,
    DoctorId int(6) FOREIGN KEY REFERENCES Doctors(DoctorId),
    DiagnosisId int(6) FOREIGN KEY REFERENCES Diagnosis(DiagnosisId),
    TreatmentId int(6) FOREIGN KEY REFERENCES Treatment(TreatmentId)
)";

if($conn->query($sql)===TRUE){
    echo "Table Patient created sucessfully";
} else{
    echo "Error creating Table" . $conn->error;
}