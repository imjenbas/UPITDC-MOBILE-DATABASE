<?php
	$connection=mysqli_connect("localhost","root","root","form");
	$sql = "CREATE TABLE persons(first_name CHAR(30), last_name CHAR(30), age INT)";
	if(mysqli_query($connection, $sql)) {
		echo "Table persons created successfully successfully";
		}
	else {
		echo "Error creating database:".mysql_error($con);
		}
	
	mysqli_close($connection);
?>