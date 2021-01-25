<?php 

session_start();
$con=mysqli_connect("127.0.0.1","root","","chiromo");
$query ="SELECT * FROM `login` WHERE email='".$_POST['email']."' AND password='".$_POST['password']."' ";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	$_SESSION['admin']=$_POST['email'];
	header("Location:main.php");
}
else{
	header("Location:index.php?err= Username and Password do not match");
}

 ?>
