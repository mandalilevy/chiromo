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
   
 <nav class="navbar navbar-expand-lg" style="background-color: black" >

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
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Reset Password</a>
      </li>
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10%">
  <div class="">
    <div class="container">
<center><a href="new_body.php" style="text-decoration: none;text-transform: uppercase;font-size: 16px"> New Body Registration</a>  | <a href="bodies.php"  style="text-decoration: none;text-transform: uppercase;font-size: 16px"> Available Bodies</a> | <a href="released.php"  style="text-decoration: none;text-transform: uppercase;font-size: 16px">Released Bodies</a> </center> 

  </div>
</div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form class="form" method="post" action="">
                                <div class="form-group">

                             <label style="font-weight: bold;">New Password</label>
                                    <input type="text" required="" class="form-control" name="pp" >
                                </div>
                           
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="upp">Reset</button>
                                </div>
                            </form>
      </div>
    </div>
  </div>
</div>



<?php 

if (isset($_SESSION['admin'])) {
	if (isset($_POST['upp'])){
$con=mysqli_connect("127.0.0.1","root","","chiromo");
//$ps=$_POST['num'];
$qr ="UPDATE `login` SET `password`='".$_POST['pp']."' WHERE email = '".$_SESSION['admin']."'";
if ($con->query($qr) === TRUE) {
  //header("Location: main.php");
}
}
}
 ?>


</body>
</html>
