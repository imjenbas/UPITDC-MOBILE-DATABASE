<?php
	$link=mysql_connect("localhost:8889","root","root","form");
	$sql "CREATE DATABASE my_db";
	if(mysql_query($con, $sql)) {
		echo "Database my_db created successfully";
		}
	else 
		echo "Error creating database:".mysql_error($con);
		
?>