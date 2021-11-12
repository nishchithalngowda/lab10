<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost", "root", "","lab10");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM student where id = $m";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <form  action="update.php" method="get">
 
 <table width='200' border='1'>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><th>Firstname</th><th>Lastname</th></tr><tr><td><input type = 'text' name = 'firstname' value='$row[fname]'></td><td><input type = 'text' name = 'lastname' value='$row[lname]'></td></tr>";
	
  } 
 ?>
 <input type="hidden" name="pid" value="<?php echo $m;?>" />
 
 </table>
 <input type="submit" value="submit">
 </form>
 <?php
mysqli_close($conn);  
?>  