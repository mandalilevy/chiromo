 <?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","chiromo");

$sql="INSERT INTO `released_bodies`(`id`, `name`, `nok`, `phone`, `db`, `dr`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['pp']."','".$_POST['db']."','".$_POST['dr']."')";
if(mysqli_query($con, $sql)){
$upp="DELETE FROM `new_body` WHERE id='".$_POST['num']."'";
if(mysqli_query($con, $upp)){
 header("Location:release_body.php?Invalid= Body Released Successfully!!");}
}


 ?>