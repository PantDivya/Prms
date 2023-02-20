<?php 
include_once 'check_session.php';
include 'navbar.php';
?>

<html>
    <head>
         <!-- Bootstrap Version 5.0 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
       
        <div>   <h3 style="background-color: #0081C9; border-radius:20px 20px 0px 0px; margin: 0px 330px 0px 330px ; padding: 20px 20px 20px 20px; color: #86E5FF; border-bottom: 1px solid #fff; " >Add Doctor</h3> </div>
        <div  style="background-color: #5BC0F8 ; margin: 0px 330px 0px 330px ;  padding: 0px 20px 20px 20px; border-radius:0px 0px 20px 20px"  >
<form name="Add Doctor" method="post" action="AddDoctor_process.php" style="color: black;">
    <div class="row">
  <div class="col-md-6 mb-4">
    <label for="FirstName" class="form-label">FirstName:</label>
    <input type="text" class="form-control" placeholder="Enter first name" name="FirstName">
  </div>
  <div class="col-md-6 mb-4">
    <label for="LastName" class="form-label">LastName:</label>
    <input type="text" class="form-control" placeholder="Enter last name" name="LastName">
  </div>
</div>
<div class="row">
  <div class="col-md-6 mb-4">
    <label for="Address" class="form-label">Address:</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="Address">
  </div>
  <div class="col-md-6 mb-4">
    <label for="Contact" class="form-label">Contact:</label>
    <input type="text" class="form-control" placeholder="Enter Contact Number" name="Contact">
  </div>
  </div>
  <div class="row">
  <div class="col-md-6 mb-4">
    <label for="Specialist" class="form-label">Specialist:</label>
    <input type="text" class="form-control" placeholder="Enter Doctor Specialization" name="Specialist">
  </div>
  <div class="col-md-6 mb-4">
    <label for="Status" class="form-label">Status:</label>
        <select name="Status" class="form-control"  >
            <option placeholder="Choose">Choose</option>
            <option value= "1">Available</option>
            <option  value= "0">Unavailable</option>
        </select>
  </div>
    <div style="text-align: right; margin-top: 30px;">
    <input type="reset" class="btn btn-outline" value="Close" onclick="location.href='FetchDoctorTable.php';" 
    style="margin-right: 5px; background-color: #a3afbb;">
    <input type="submit" class="btn btn-outline  " style="background-color:0081C9;border-color: #7FBCD2;color:#fff;font-weight:bold;"  value="Add Doctor"> <!--style="background-color: blue;color: white; border-radius: 5px;-->
    </div>
  </div>

</form>
        </div>
       
    <!-- Bootstrap Version 5.0 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </body>
    
</html>
