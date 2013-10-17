<html>
	<head>
	<title>Function</title>
	</head>
	
	<body>
		<?php
		function display_text(){
			echo $_POST['name'].'!<br>';
			if($_POST['age']>25)
				echo 'You are young.';
			else
				echo 'You are young at heart';
		
		}
		display_text();
		
		?>
	
	</body>




</html>