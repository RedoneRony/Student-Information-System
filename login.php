<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css" />
	
	<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
</head>

<body>
<div class="heade">
    <h1 align="center"> Admin Login </h1>
</div>
<form action="dbcon.php" method ="POST">

<div class="container">
	
	
	<div class="form-input">
		<input type="text" name="uname" placeholder="Enter Username" />
	</div>
	<div class="form-input">
		<input type="password" name="password" placeholder="Enter Password" />
	</div>
	
	<input type="submit" name="submit" value="LOGIN"  class="btn-login"/>
	
</div>

</form>
    
</body>
</html>

