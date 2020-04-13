<?php

include "config.php";

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="select*from registration where email='$email' AND password='$password'";
	$check= mysqli_query($con,$query);
	
	if($check){
		if(mysqli_num_rows($check)> 0){
			echo"
<script>
alert ('You are successfully Logged In');
window.location.href='home.html';
</script>
";
		}
	else{
		echo"
<script>
alert('Email or password not correct');
window.location.href='register.html';
</script>
";
	}
	
}
else{
	echo"
<script>
alert('Database error');
window.location.href='login.html';
</script>
";
      }
}
else{
	
}


?>