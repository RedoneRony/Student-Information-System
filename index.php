<!DOCTYPE HTML>


<html lang="en_US">
<head>

<meta charset="UTF-8">

<title> Student mannagemesnt system </title>
<style>

	.headert{
		background-color: gray;
		width:90%;
		height:80px;
		margin-left:45px;
		margin-bottom:30px;
		border-bottom: 10px solid black;
		border-radius:50px;
	}
	.left{
		float:left;
		width:88%;
		height:50px;
		margin-left:20px;
		
	}
	.left h1{
		margin-left:190px;
	}
	.right{
		float:right;
		width:10%;
		height:50px;
		
	}
	.right a{
		margin-right:8px;
		text-decoration:none;
	}
	.right a:hover{
		color:white;
		transition:all 1.02s;
		
	}
	body{
		background-color:rgb(52, 73, 94);
		
	}
	.tableinfo{
		width:100%;
		margin-left100px;
		height:210px;
		background-color:green;
		border-radius:15px;
		border-bottom: 5px solid black;
	}
	.tablet{
		margin-left:290px
		
	}
	
	table{
		
		border: 1px solid black;
		padding: 10px;
		margin-left:140px;
		margin-top:45px;
		border-radius:5px;
		overflow:hidden;
	}
	tr td{
		border: 1px solid black;
		padding: 10px;
		margin-left:140px;
		margin-top:45px;
		border-radius:5px;
		overflow:hidden;
		
	}
	input[type="submit"]{
		padding:4px;
	}
	
	
	input[type="submit"]:hover{
		background-color:black;
		color:white;
		transition:all 1.05s;
	}
	

</style>

</head>

<body>
<div class="headert">
<div class="right">
<h3><a href="login.php">Admin login</a></h3>
</div>
<div class="left">
<h1> Welcome to Student Mannagement System</h1>
</div>

</div>
<form method="post" action="index.php">


<div class="tableinfo">
<div class="tablet">
<table >
	
	<tr style="padding=15px;">
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>

		<td align="left">Choose Semester</td>
		<td>
			<select name="std" required>
			<option value="1">1st</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			<option value="7">7th</option>
			<option value="8">8th</option>
			<option value="9">9th</option>
			<option value="10">10th</option>
			<option value="11">11th</option>
			<option value="12">12th</option>
			
			</select>
		</td>
	</tr>
	<tr>
		<td align="left"> Enter Id Number</td>
		<td><input type="text" name="id" required> </td>

	</tr>
	<tr>
		<td align="center" ><input type="submit" name="submit" value="show info"></td>
	</tr>

</table>

</div>
</div>

</body>
</html>
<?php

if(isset($_POST['submit'])){
	$standard=$_POST['std'];
	$id=$_POST['id'];
	$con=mysqli_connect("localhost","root","" ,"sms");
	include('function.php');
	showdetails($standard,$id);
	

	
	
}
?>

