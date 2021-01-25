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
   
 <nav class="navbar navbar-expand-lg" style="background-color: black"  >

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
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="bodies.php"><i class="fa fa-arrow-circle-left fa-2x"></i> </a>
      </li>
 
 </ul>
 </div> 
  </div>
</nav>
</div>



<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-dark">
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">RELEASE BODY</h3></center> 
                        </div>

                        <div class="card-body">
                            <form class="form" method="post" action="release.php">

                                   <?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert alert-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
                               <div class="row">
                                <div class="form-group">

                                   
<?php

if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","chiromo");
$query ="SELECT * FROM `new_body` where id='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
<label style="font-weight: bold;">Body ID</label>
                                    <input type="text" class="form-control" name="num" readonly="readonly"  value="<?php echo $row["id"]; ?>">
                                </div>
                               
                                <div class="form-group ml-3">
                                    <label style="font-weight: bold;">Body Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row["name"]; ?>" readonly="readonly" >
                                </div>
                                  </div>

                                  <div class="row">

                                   <div class="form-group ">
                                    <label style="font-weight: bold;">Next of Kin Name</label>
                                    <input type="text" class="form-control" readonly="readonly" name="cont" value="<?php echo $row["nok"]; ?>">

                                </div>
                                 <div class="form-group ml-3">
                                    <label style="font-weight: bold;">Next of Kin Contacts</label>
                                    <input type="text" class="form-control" readonly="readonly" name="pp" value="<?php echo $row["phone"]; ?>">

                                </div>
                                </div>







                                  <div class="row">
                                <div class="form-group ">
                                    <label style="font-weight: bold;">Date Brought</label>
                                    <input type="text" class="form-control" readonly="readonly" name="db" value="<?php echo $row["date"]; ?>">

                                </div>
                              
                               <?php }} ?>
                                 <div class="form-group ml-3">
                                    <label style="font-weight: bold;">Date Released</label>
                                    <input type="date" class="form-control" name="dr" required="">
                                </div>
                              </div>
                                
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="sus">Release</button>
                                </div>
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
