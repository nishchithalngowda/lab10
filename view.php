<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}

</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","labten");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM student";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 <tr><th>Id</th><th>Firstname</th><th>Lastname </th><th>Email</th><th>Password</th><th colspan='2'>For modification</th></tr>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[id]</td><td>$row[fname]</td> <td>$row[lname]</td><td>$row[email]</td><td>$row[password]</td> <td><a href='update1.php?id=$row[id]'>Edit</a></td><td><a href='delete.php?id=$row[id]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 
 <h4><a href="login.html">Back</a></h4>
 <?php
mysqli_close($conn);  
?>
</head>
</html>  