<?php

//include('dbcon.php');
$uname= $_POST['uname'];
$password= $_POST['password'];


 $con=mysqli_connect("localhost","root","" ,"sms");

$result=mysqli_query($con,"SELECT * FROM `login` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);

if($count==1){
	//echo "login success";
	
	?>
	<script>
	alert('Correct password');
	</script>
	<?php
	
	session_start();
	header('location:admin/admindash.php'); 
	
}
else{
	
	?>
	<script>
	alert('Incorrect info');
	</script>
	<?php
	header("refresh:2;url=login.php"); 
	
	
}

?>