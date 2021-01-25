
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","chiromo");


$query ="SELECT * FROM `new_body` WHERE id='".$_POST['bid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:new_body.php?Empty=Body already Registered into the system!!");

	
}
else{
$query ="SELECT * FROM `released_bodies` WHERE id='".$_POST['bid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:new_body.php?Empty=Body already Registered into the system!!");

	
}
else{
$sql="INSERT INTO `new_body`(`id`, `name`, `date`, `gender`, `nok`, `phone`, `room`, `draw`) VALUES('".$_POST['bid']."','".$_POST['bname']."','".$_POST['date']."','".$_POST['gen']."','".$_POST['kin']."','".$_POST['pno']."','".$_POST['room']."','".$_POST['draw']."')";

if(mysqli_query($con, $sql)){
header("Location:new_body.php?Invalid=Successfully Registered!!");
}

}

}







 ?>