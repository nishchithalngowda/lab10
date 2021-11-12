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

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost", "root", "","labten");  
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
echo  "<tr><th>Firstname</th><th>Lastname</th><th>Email</th></tr><tr><td><input type = 'text' name = 'firstname' value='$row[fname]'></td><td><input type = 'text' name = 'lastname' value='$row[lname]'></td><td><input type = 'text' name = 'email' value='$row[email]'></td></tr>";
	
  } 
 ?>
 <input type="hidden" name="id" value="<?php echo $m;?>" />
 
 </table>
 <input type="submit" value="submit">
 </form>
 <?php
mysqli_close($conn);  
?>  
</head>
</html>  