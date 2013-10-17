<?php
$con=mysqli_connect("localhost","root","root","form");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO persons (first_name, last_name, age)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>