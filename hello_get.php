<html>
	<head></head>
	<title>Form Handling - Hello_Get PHP</title>
	<body>
	Hello <?php echo$_GET['name']; ?>!<br>
	<?php
		if($_GET['age']>25)
			echo 'You are young.';
		else
			echo 'You are young at heart.';
	</body>
</html>