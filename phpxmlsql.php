<?php
// Create connection
$con=mysqli_connect("localhost","root","root","form");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "SELECT * FROM persons");
//$result = mysqli_query($con, $sql);

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><persons></persons>');

while($row = mysqli_fetch_array($result))
{
	$persons = $xml->addChild('persons');
	$persons->addChild('first_name', $row['first_name']);
	$persons->addChild('last_name', $row['last_name]);
	$persons->addChild('age', $row['age']);	
}
echo $xml->asXML();

?>