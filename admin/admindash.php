<?php

session_start();
	unset($_SESSION['logged_in']);  
      session_destroy(); 
	
	
	
	
?>

<!DOCTYPE html>
<head>
<title> Dashboard </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_admin.css" />
	
	<style>
	
	.header{
		opacity:0.7;
		filter:alpha (opacity=70);
		margin-left:15px;	
		width: 95%;
		height:60px;
		background-color:gray;
		overflow:hidden;
		border-radius:50px;
	}
	.left{
		float:left;
		width:85%;
	}
	.left h1{
		margin-left: 390px;
		margin-top: 10px;
	}
	.right{
		float:right;
		width:8%;
	}
	.right a{
		text-decoration:none;
		padding:5px;
		border-radius:3px;
	}
	.right a:hover{
		background-color:black;
		color:white;
		transition:all 1.05s;
	}
		
	.dashboard{
		
		width: 70%;
		height:300px;
		background-color:blue;
		border-radius:10px;
		margin-top:80px;
		margin-left:190px;
		overflow:hidden;
	}
	
	.tabletitle{
		
		width:50%;
		height:240px;
		color:white;
		margin-left:240px;
		margin-top:30px;
		background-color:green;
		overflow:hidden;
		
	}
	
	table, th, td{
		border: 1px solid black;
		padding: 10px;
		margin-left:120px;
		margin-top:45px;
		border-radius:5px;
		
	}
	
	table tr td a{
		text-decoration:none;
		color:white;
	}
	
	table tr td:hover{
		transition:all 1.0s;
		background-color:black;
	}
	
	
	</style>
	
	
</head>
<body>

<div class="header">
	
	<div class="left">
	<h1>Welcome to admin Dashboard</h1>
	</div>
	
	<div class="right">
	<h4> <a href="logout.php">Logout</a> </h4>
	</div>

</div>



<div class="dashboard">
	<div class="tabletitle">
	
	<table>
	
	<tr>
	<td>1. </td>  <td> <a href="addstudent.php">Insert Student Details</a>  </td>
	</tr>
	
	<tr>
	<td>2. </td>  <td> <a href="updatestudent.php">Update Student Details</a>  </td>
	</tr>
	
	<tr>
	<td>3. </td>  <td> <a href="deletestudent.php">Delete Student Details</a>  </td>
	</tr>
	
	</table>
	
	
	</div>

</div>



</body>