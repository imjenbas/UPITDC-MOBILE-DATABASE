<?php
// Create connection
$con=mysqli_connect("localhost","root","root","form");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  
	  $first_name = 'Ninay';
	  $last_name = 'Sarol';
	  $age = 22;
	  
	  mysqli_query($con,"INSERT INTO Persons (first_name, last_name, age)
	  VALUES ('Peter', 'Griffin',35)");

	  mysqli_query($con,"INSERT INTO Persons (first_name, last_name, age) 
	  VALUES ('Glenn', 'Quagmire',33)");
	  

	 // $sql = "INSERT INTO persons (first_name, last_name, age) VALUES //('$first_name','$last_name','$age)";

	//  mysqli_query($con, $sql);
	  
	   echo "You're now Connected!";
	   
	   mysqli_close($con);
	   
	   echo "You're now DISConnected!";

?>