<?php

    //include('../dbcon.php');
   	$id=$_POST['id'];
	
	$name=$_POST['name'];
	//echo $name;
	$city=$_POST['city'];
	
	$pcon=$_POST['pcont'];
	$std=$_POST['std'];
	
	$imagename= $_FILES['simg']['name'];
	$tempname= $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$con=mysqli_connect("localhost","root","" ,"sms");
	
$qry="UPDATE `student` SET `id` = '$id', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `id` = '$id'";


	//$qry="UPDATE `student` SET `id` = `$id`";
    
    $run = mysqli_query($con,$qry);

    

    if($run == true)
    {
        
        
        ?>
        <script>
            alert('Data Updated Successfully.'); 
            window.open('updatefrom.php?sid=<?php echo  $id; ?>', '_self');
        </script>
		<?php
    }
	else{
		echo "data was not updated";
	}

?>