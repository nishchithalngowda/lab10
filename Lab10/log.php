<?php  
@session_start();

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


$conn = mysqli_connect("localhost", "root", "","lab10");  
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}  

$sql = "SELECT * FROM student where email='$email'";
$result=$conn->query($sql);
mysqli_query($conn, $sql);  
		 while(($row = mysqli_fetch_row($result))!= NULL )
		 {
		 		    $u = $row[5];
				    $p = $row[6];
				 $_SESSION["email"] = $u;
		 }
		 
	if ($uname==$u && $password==$p )
		 {
		 ?>
		 <script type="text/javascript">
				alert('Successfully Login');
				window.location="view.php";
		 </script>
		<?php
		 }
		 else
		 {
		 ?>
		 <script type="text/javascript">
				alert('Fail');
				window.location="index.html";
		
		 </script>
		 <?php

		 }	 
		 
			
mysqli_close($conn); 
?>

