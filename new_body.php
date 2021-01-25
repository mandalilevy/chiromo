<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CHIROMO FUNERAL SERVICES</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "logo.jpeg" type = "image/x-icon"> 
</head>
<body>
	<div>
   
 <nav class="navbar navbar-expand-lg fixed-top" style="background-color: black" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars" style="color:white; font-size:28px;"></i>

  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['admin'])) {
                  echo '<a style="color: white; font-family:Verdana; font-weight:bolder;" class="nav-link">Welcome: '.$_SESSION['admin'].'</a>';
                    }


 ?>
      </li>
</ul >
<ul class="navbar-nav  mt-lg-0 mx-auto">
    <li class="nav-item">
    <a style="color: WHITE; font-family:Verdana; font-weight: bolder;" >CHIROMO FUNERAL SERVICES</a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="main.php"><i class="fa fa-arrow-circle-left fa-2x"></i> </a>
      </li>
 
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 5%">
<div class="row">
      <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">NEW BODY REGISTRATION</h5>


 <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>




<div style="">
<form action="reg.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name" style="font-weight: bold;">BODY ID</label>
      <input type="text" class="form-control" id="name" name="bid"  placeholder="" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="idn" style="font-weight: bold;">FULL NAME</label>
      <input type="text" class="form-control" id="idn" name="bname" placeholder=""  required="">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dae" style="font-weight: bold;">DATE OF REGISTRATION</label>
      <input type="date" class="form-control" id="dae" name="date"  required="">
    </div>
    <div class="form-group col-md-6">
        <label for="sc" style="font-weight: bold;">GENDER</label>
       <select class="form-control" name="gen" id="sc">
  <option>Select Gender</option>
  <option>Male</option>
  <option>Female</option>
  </select>
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nms" style="font-weight: bold;">NEXT OF KIN</label>
      <input type="text" class="form-control" id="nms" name="kin" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="pb" style="font-weight: bold;">PHONE NUMBER</label>
      <input type="text" class="form-control" id="inputEmail4" name="pno" maxlength="10"  placeholder="07XXXXXXXX" required="">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" style="font-weight: bold;">ROOM PRESERVED</label>
      <input type="text" class="form-control" id="inputEmail4" name="room"  required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="font-weight: bold;">DRAW NUMBER KEPT</label>
      <input type="text" class="form-control" id="inputPassword4" name="draw" required="">
    </div>
  </div>
  <div class="form-row">
     <button type="submit" class="btn btn-primary">Register</button>
  </div>
 
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

