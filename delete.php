<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost", "root", "","labten");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "DELETE FROM student where id = $m";  

 mysqli_query($conn, $sql);  
  echo "Data Sucessfully Deleted<br><a href='view.php'>BAck</a>";
mysqli_close($conn);  

?>  