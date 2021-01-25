
<?php 

if (isset($_POST['search'])) {

$valuetosearch=$_POST['value_to_search'];
$sql="SELECT * FROM `new_body` WHERE CONCAT(`id`, `name`, `phone`) LIKE '%".$valuetosearch."%'"; 
$search_result= filtertable($sql);
}
else{
$sql="SELECT * FROM `new_body` ORDER BY `date`";
$search_result=filtertable($sql);

}

function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1","root","","chiromo");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
 ?>







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
    
<ul class="navbar-nav mt-lg-0  mr-auto">
<li class="nav-item">
    
     <form action="bodies.php" method="post">
    
    <input type="text" name="value_to_search" class="form-group" placeholder="Search Officer here">
    <button class="form-group" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    
   </form>
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
<div class=" container pt-sm-4">
  <center class="text-uppercase text-primary h5" style="text-decoration: underline;">Available Bodies</center>
       <table class="table  table-bordered table-responsive-sm table-sm text-nowrap" >
    <thead class="thead-light">
<tr>
       
      <th scope="col"><strong>NO.</strong></th>
      <th scope="col"><strong>BODY ID</strong></th>
      <th scope="col"><strong>BODY NAME</strong></th>
      <th scope="col"><strong>DATE BROUGHT</strong></th>
      <th scope="col"><strong>NEXT OF KIN</strong></th>
      <th scope="col"><strong>NEXT OF KIN CONTACTS</strong></th>
      <th scope="col"><strong>ROOM PRESERVED</strong></th>
      <th scope="col"><strong>DRAW PRESERVED</strong></th>
      <th scope="col"><strong>RELEASE BODY</strong></th>


</tr>
</thead>
<tbody>
<?php
 $count=1;

//$query ="SELECT * FROM `officer`";
//$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($search_result)) { 
$cala=$row["id"];

  ?>
<tr><td ><?php echo $count; ?></td>
  <td><?php echo $row["id"]; ?></td>
<td ><?php echo $row["name"]; ?></td>
<td ><?php echo $row["date"]; ?></td>
<td ><?php echo $row["nok"]; ?></td>
<td ><?php echo $row["phone"]; ?></td>
<td ><?php echo $row["room"]; ?></td>
<td ><?php echo $row["draw"]; ?></td>
<?php 
?>

<td style="text-align: center;" >
  <a href="verify_body.php?off=<?php echo $row["id"]; ?>"><i class="fa fa-arrow-right "></i></i></a>
</td>



</tr>
<?php 
$_SESSION['name']=$row["id"]; 
$count++;} ?>
</tbody>
</table>
</div>





</body>
</html>
