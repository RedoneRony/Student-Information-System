<?php
session_start();
       

?>
<?php
    include('header.php');
    include('titlehead.php');
   // include('../dbcon.php');
   

    $sid = $_GET['sid'];
	$con=mysqli_connect("localhost","root","" ,"sms");
    $sql = "SELECT * FROM `student` WHERE `id`='$sid'";
    $run = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($run);
?>

<form method="POST" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:80%; margin-top:40px;">

<tr>
<th>ID</th>
<td><input type="text" name="id" value=<?php echo $data['id']; ?> required></td>
</tr>
<tr>
<th>Name</th>
<td><input type="text" name="name" value=<?php echo $data['name']; ?> required</td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" value=<?php echo $data['city']; ?> required</td>
</tr>

<tr>
<th>Parents Contact Number</th>
<td><input type="text" name="pcont" value=<?php echo $data['pcont']; ?> required</td>
</tr>

<tr>
<th>standard</th>
<td><input type="number" name="std" value=<?php echo $data['standard']; ?> required</td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" required</td>
</tr>
<tr>

    <td colspan="2" align="center">
    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
    
    <input type="submit" name="submit" value="submit">
    
    </td>


</tr>
</table>
</form>


