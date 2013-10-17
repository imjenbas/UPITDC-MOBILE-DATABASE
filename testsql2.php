<?php

$link = mysql_connect('localhost', 'root', 'root');

if(mysql_connect_errno)($link))
{
	echo "Failed to connect to MySQL:" . mysql_connect_error();
}

mysql_close($link);

?>