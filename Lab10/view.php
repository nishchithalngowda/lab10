<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","lab10");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM student";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 <tr><th>Firstname</th><th>Lastname </th><th>email</th><th>password</th><th colspan='2'>For modification</th></tr>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[fname]</td> <td>$row[lname]</td><td>$row[email]</td><td>$row[password]</td> <td><a href='update1.php?id=$row[id]'>Edit</a></td><td><a href='delete.php?id=$row[id]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 
 <h4><a href="reg.html">Back</a></h4>
 <?php
mysqli_close($conn);  
?>
</head>
</html>  