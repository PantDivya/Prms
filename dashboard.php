<?php
require_once 'check_session.php'; 
include 'head.php';
include 'navbar.php';
?>

<body>

<!--Home Page-->
<div class="container-fluid p-5 bg-success text-white text-center">
    
    <h1>Patient Management System</h1>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>

    
</div>
<!--OverView-->
<div class="container mt-5 ">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <img src="" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
