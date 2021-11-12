<?php  

$a= $_REQUEST['fname'];
$l= $_REQUEST['lname'];
$b= $_REQUEST['email'];
$c = $_REQUEST['psw'];


$conn = mysqli_connect("localhost", "root", "","lab10");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO `student` (`id`, `fname`, `lname`, `email`,`password`) VALUES ('','$a','$l','$b','$c');";  
 
?>
		 <script type="text/javascript">
				alert('Yippie');
				window.location="login.html";
		 </script>
		<?php
  mysqli_query($conn, $sql); 
    ?>
	<!-- <script type="text/javascript">
				alert('Registration successful');
				window.location="login_reg.html";
		 </script>!>
	<?php

  mysqli_close($conn);
 
 ?>
 