<?php

    $username = $_POST['username'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

$sql = "INSERT INTO registration (username,email,number,address,Password,cpassword) VALUES ('$username','$email','$number','$address','$password','cpassword')";
$conn = mysqli_connect("localhost","root","","data");
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.html");
}
else
{
	echo "Error :".$sql;
}
?>