<?php

session_start();
header('location:login_db.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'project2');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "select * from usertable where user = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg= " insert into usertable(user,password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>