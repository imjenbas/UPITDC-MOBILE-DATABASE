<html>
	<head></head>
	<title>Form Handling - Hello_Post PHP</title>
	<body>
	Hello <?php echo$_POST['name']; ?>!<br>
	<?php
		if($_POST['age']>25)
			echo 'You are young.';
		else
			echo 'You are young at heart.';
	?>
	</body>
</html>