<?php

session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'project2');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "select * from usertable where user = '$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']= $name;
	header('location:WelcomeDB.php');
}else{
	header('location:login_db.php');
}

?>