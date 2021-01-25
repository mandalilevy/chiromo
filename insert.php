
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","chiromo");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}

$nm=$_POST['nam'];
$em=$_POST['emm'];
$ps=$_POST['pass'];
$query ="SELECT * FROM `login` WHERE email='".$_POST['emm']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	 header("Location:register.php?Invalid= You are Already Registered!!");
}

else{


$sql = "INSERT INTO `login`(`name`, `email`, `password`)  VALUES ('$nm', '$em','$ps')";
if(mysqli_query($con, $sql)){
header("Location:index.php?ss=Congratulations! Login Here");
//header("Location:index.php");
} 

else{
   header("Location:register.php?Invalid= Error!! Data not Saved");
}
 }

mysqli_close($con);
 ?>