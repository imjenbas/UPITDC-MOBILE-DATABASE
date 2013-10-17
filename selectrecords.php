<?php
$con=mysqli_connect("localhost","root","root","form");
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else
  {
	  echo "Connection Established!";
  }
 ?>
 <?php 
$sql = "SELECT * FROM persons"
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))

{
	echo $row['first_name']. "" . $row['last_name'];
	echo "<br>";
}
mysqli_close($con);
?>