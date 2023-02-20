<!-- <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
  display: block;
  background-color: red;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style> -->
    <!--Navigation Bar-->
    <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-default" style="border-bottom: 1px solid #fff;">
    <div class="container-fluid">
      <img src="image/snscLogo.png" alt="" style="height: 40px; width: 40px;object-fit: cover;
      border-radius: 50%;">
      <a class="navbar-brand" href="#">Patient Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php" target="">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FetchDoctorTable.php">Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Patient</a>
          </li>
          
        </ul>
        
        <!-- <div class="dropdown">
  <button class="dropbtn">Welcome  </button>
  <div class="dropdown-content">
  <a href="logout.php"> Log Out</a>
  </div>
</div> -->
<!-- Example single danger button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
 href=""style="border-radius:35px">User</button>

  <ul class="dropdown-menu"  style="text-align:center;">
    <li><img src="image/snscLogo.png" alt="User" style="height: 40px; width: 40px;object-fit: cover;
      border-radius: 50%; "></li>
      <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item"> <?php  echo 'Welcome<br>'.$_SESSION['Email'];  ?></li>
    <li><a class="dropdown-item" href="">Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item " href="logout.php" style="color:red;">Log Out</a></li>
  </ul>
</div>

        <!-- <a href="logout.php" class="btn btn-outline-danger" style="color:black">Log Out </a> -->
      </div>
    </div>
  </nav>  
</div>