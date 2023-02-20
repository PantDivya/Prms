<!DOCTYPE html>
<html>
<head>
<title>User Registration Form </title>
<head>
<body>
<h2>Patient Registration Form </h2>
<div class="form">
<form name = "Patient Registration Form" method="post" action = "add_patient.php">
<div class ="PatientInfo"><h3>PATIENT INFORMATION(Please Fill the form carefully.)</h3>
<label> Firstname </label><input type = "text" name = "FirstName">
</br>
<label> Middlename </label><input type = "text" name = "MiddleName">
</br>
<label> Lastname </label><input type = "text" name = "LastName">
</br>
<label> Address </label><input type = "text" name = "Address">
</br>
<label> City </label><input type = "text" name = "City">
</br>
<label> State </label><input type = "text" name = "State">
</br>
<label> Zip </label><input type = "text" name = "Zip">
</br>
<label> Contact: </label>
<label> Mobile </label><input type = "text" name = "Mobile">
<label> Phone </label><input type = "text" name = "Phone"></br>
<label> Email</label>
<input type = "email" name = "Email">
</br>
<label> Gender </label>
<input type = "radio" name = "Gender" value="Male"> Male
<input type = "radio" name = "Gender" value="Female"> Female
<input type = "radio" name = "Gender" value="Other"> Other

</br>
<label> Marital Status </label>
<input type = "radio" name = "MaritalStatus" value="Married"> Married
<input type = "radio" name = "MaritalStatus" value="Unmarried"> Unmarried
</br>
<label> Date Of Birth </label><input type = "date" name = "DOB"></br>


<label>Age</label>
<input type="number" name="Age" min ="0" max="100"></br>
<!--<label>Profile</label>
<textarea name="Profile" rows ="1" column ="1">
</textarea>-->
</div>
<div class = "MedicalInfo">
<h3>PATIENT MEDICAL INFORMATION</h3>


<label for="BloodGroup">Blood Group</label>

<select name="BloodGroup" >
  <option value= "A+">A+</option>
  <option  value= "A-">A-</option>
  <option value= "B+">B+</option>
  <option value= "B-">B-</option>
    <option value= "O+">O+</option>
  <option value= "O-">O-</option>
  <option value= "AB+">AB+</option>
  <option value= "AB+">AB-</option>
</select><br/>

<p> Any long term medical condition? </p>
<input type = "checkbox" name = "MedicalCondition" value = "Pulmonary">Chronic obstructive pulmonary disease
<input type = "checkbox" name = "MedicalCondition" value = "Heart"> Heart Disease
<input type = "checkbox" name = "MedicalCondition" value = "Diabetes"> Diabetes
<input type = "checkbox" name = "MedicalCondition" value = "Cancer">Cancer
<input type = "checkbox" name = "MedicalCondition" value = "Allergies">Allergies
<input type = "checkbox" name = "MedicalCondition" value = "BP">Blood Pressure(High/Low)
<input type = "checkbox" name = "MedicalCondition" value = "Others">Others
<p>Currently facing medical condition? </p>
<label>Symptoms:</label></br>
<textarea name="Symptoms" rows ="1" column ="1"></textarea>

</div>

<h3>GURANTOR INFORMATION</h3>
<label>Relation with Patient</label>
<input type= "radio" name ="Relation" value= "Self">Self
<input type= "radio" name ="Relation" value= "Spouse">Spouse
<input type= "radio" name ="Relation" value= "Parents">Parents
<input type= "radio" name ="Relation" value= "Child">Child
<input type= "radio" name ="Relation" value= "Other">Other
</br>

<label> Firstname </label><input type = "text" name = "GurantorFirstname">
</br>
<label> Lastname </label><input type = "text" name = "GurantorLastname">
</br>
<label> Address </label><input type = "text" name = "GurantorAddress">
</br>
<label> City </label><input type = "text" name = "GurantorCity">
</br>
<label> State </label><input type = "text" name = "GurantorState">
</br>
<label> Zip </label><input type = "text" name = "GurantorZip">
</br>
<label>Contact No.</label><input type = "text" name = "GurantorContact">


</br><input type = "submit" value = "Submit">
<input type = "Reset" value ="Cancle"> <br/>

</form>
</div>
</body>
</html>






