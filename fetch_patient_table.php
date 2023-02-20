<?php


?>
<html>
	<head>
		<title>User Registration Form </title>
		<!-- Bootstrap Version 5.0 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<head>
<body>
    <div>
        <button style=" background-color:#86E5FF;border-color:#5BC0F8;border-radius:5px;padding:7px; float: right; margin:5px 5px 5px 5px;" ><a href="form_add_doctor.php" style="color:#0081C9;font-weight:bold;" >Add Doctor</a></button>
    </div>


	<div class="table"style="background-color: #5BC0F8; padding: 10px;color:0081C9; font-weight:bold;">
		<h4>Doctor Table</h4>
	</div>
<div>
	<table class="table table-striped"
	style="margin:20px; border: 2px;">
		<thead >
			<tr>
				<th>SN</th>
				<th>Patient Name</th>
				<th>Age</th>
                <th?>Blood Group</th>
				<th>Contact Number</th>
				<th>Guardian</th>
				<th>Doctor</th>
                <th>Diagnosis</th>
                <th>Treatment</th>
			</tr>
		</thead>
		
		<tbody>
        
		<?php
        require_once 'database_connect.php';
        if(isset($_GET['success'])){
           
           echo $_GET['success'];            
        }
        $sql = "SELECT * from Doctors";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
        $i = 1;
        while($row = $result->fetch_assoc()){
           ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['FirstName'].'&nbsp'.$row['LastName']; ?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Contact'];?></td>
                <td><?php echo $row['Specialist'];?></td>
                <td><?php if($row['IsActive']==1){
                    echo "Available";
                }else{
                    echo"Unavailable";
                }
                ?>
                </td>
                <td><a href="form_edit_doctor.php?id=<?php echo $row["DoctorId"];?>">Update</a></td>
                <td><a href="delete_doctor.php?id=<?php echo $row["DoctorId"];?>">Delete</a></td>
        <?php 
        $i++;
        }
        ?>
        </tbody>
        <?php
        }else{
            echo "0 results";
        }
        $conn->close();
        ?>		
</table>
</div>


<!-- Bootstrap Version 5.0 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>






