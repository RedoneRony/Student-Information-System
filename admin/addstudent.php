<?php

session_start();
	
	
	
	
?>

<html>
<head>
	<meta charset="UTF-8">
	<title> Add Student </title>
	<style>
	
	.header{
		width:90%;
		background-color:gray;
		border-radius:40px;
		height:90px;
		margin-left:50px;
		overflow:hidden;
		
	}
	.left{
		float:left;
		width:15%;
		height:40px;
		
	}
	.left a{
		margin-left:18px;
		margin-top:10px;
		text-decoration:none;
		padding:5px;
		
	}
	.left a:hover{
		
		color:white;
		tansition:all 1.02s;
	}
	.right{
		float:right;
		width:80%;
		height:40px;
		
	}
	.right h1{
		margin-left:90px;
	}
	
	</style>

</head>
<body>

<div class="header">
	<div class="left">
			<h3> <a href="admindash.php">Back to Dashboard</a> </h3>
		</div>
		<div class="right">
			<h1>Welcome to Admin Dashboard</h1>
		</div>
	</div>


<form method="POST" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1 solid black" style="width:60%; margin-top:60px; background-color:blue; border-radius:5px;">

<tr>
<th>ID</th>
<td><input type="text" name="id" placeholder="Enter ID Number" required class="in"</td>
</tr>
<tr>
<th>Name</th>
<td><input type="text" name="name" placeholder="Enter the Name" required class="in"</td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter City" required class="in"</td>
</tr>

<tr>
<th>Parents Contact Number</th>
<td><input type="text" name="pcont" placeholder="Enter the contact Number of parent" required class="in"</td>
</tr>

<tr>
<th>Semester</th>
<td><input type="number" name="std" placeholder="Enter semester" required class="in"</td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" required class="in"</td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	//include('../dbcon.php');
	
	$idno=$_POST['id'];;
	$name=$_POST['name'];
	
	$city=$_POST['city'];;
	$pcon=$_POST['pcont'];;
	$std=$_POST['std'];
	$imagename= $_FILES['simg']['name'];
	$tempname= $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$con=mysqli_connect("localhost","root","" ,"sms");
	$qry="INSERT INTO  `student`(`id`,`name`,`city`,`pcont`,`standard`,`image`) VALUES ('$idno','$name','$city','$pcon','$std','$imagename')";
	$run=mysqli_query($con,$qry);
	if($run == true){
	?>
	<script>
	alert('Data Inserted Succesfully');
	</script>
	<?php
	}
}
?>
	