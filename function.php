<?php


function showdetails($standard,$id){
	
	$con=mysqli_connect("localhost","root","" ,"sms");
	$sql="SELECT * FROM `student` WHERE `id`='$id' AND `standard`='$standard'";
	$run=mysqli_query($con,$sql);
	//$count=mysqli_num_rows($run);
	if($run ==true){
		
	$data=mysqli_fetch_assoc($run);
	?>
	<table border="1" style="width:80%; margin-top:20px;" align="center">
	<tr>
	<th colspan="3">Student Details </th>
	</tr>
	<tr>
	<td rowspan="5" id="images"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:400px; max-width:500px; padding:2px;" /></td>
	<th>ID</th>
	<td><?php echo $data['id']; ?></td>
	
	
	</tr>
	<tr>
	<th>Name</th>
	<td><?php echo $data['name']; ?></td>
	</tr>
	<
	<tr>
	<th>Standard</th>
	<td><?php echo $data['standard']; ?></td>
	</tr>
	
	<tr>
	<th>Parents Contact No</th>
	<td><?php echo $data['pcont']; ?></td>
	</tr>
	<tr>
	<th>City</th>
	<td><?php echo $data['city']; ?></td>
	</tr>
	
	</table>

<?php
	}
else{
	
	echo "<script>alert('have no data');</script>";
	
}

}
?>

