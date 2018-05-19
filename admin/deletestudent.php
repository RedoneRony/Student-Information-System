<?php
session_start();
      
?>
<?php
    include('header.php');
    include('titlehead.php');
?>
<table align="center">
<form action="deletestudent.php" method="post">
   <tr>
       <th>Enter Semester</th>
       <td> <input type="number" name="standard" placeholder="Enter" required="required" /></td>
           
    <th>Enter Student Name</th>
        <td><input type="text" name="name" placeholder="Enter Student Name" required="required" /></td>         

    <td colspan="2"><input type="submit" name="submit" value="Search" /></td>              
   </tr>
   
</form>
</table>
        
<table align="center" width="80%" border="1" style="margin-top:10px;">
    
    <tr style="background-color:#000; color:#fff;">
        
        <th>Serial No.</th>
        <th>Image</th>
        <th>Name</th>
		<th>ID</th>
        <th>Edit</th>
    </tr>
    
    
    <?php
    if(isset($_POST['submit']))
    {
       // include('../dbcon.php');
        $standard = $_POST['standard'];
        $name = $_POST['name'];
        $con=mysqli_connect("localhost","root","" ,"sms");
        $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
    $run = mysqli_query($con, $sql);
	$count=mysqli_num_rows($run);
        
        if($count<1)
        {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else
        {
            $cout=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $cout++;
                ?>
                    <tr align="center">
        
                        <td><?php echo $cout;  ?></td>
                        <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['id']; ?></td>
                        <td><a href="deleteform.php?sid=<?php   echo $data['id']; ?>">DELETE</a></td>
                    </tr>
                
                <?php
            }
        }
    }
        
?>
    
    
</table>        
        
      
     
    
   
  