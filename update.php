<?php  

$r = $_REQUEST['firstname'];
$n = $_REQUEST['lastname'];
$m = $_REQUEST['id'];


$conn = mysqli_connect("localhost", "root", "","labten");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "update student set fname = '$r' ,lname = '$n' where id = $m";  
echo "Data has updated Sucessfully<br><a href='view.php'>BACK</a>";
echo $sql;

 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>  