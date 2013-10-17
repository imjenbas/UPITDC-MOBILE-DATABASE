<html>
	<head>
	<title>Function 2</title>
	</head>
	
	<body>
		<?php
		function display_text($name, $age){
			echo $name.'!<br>';
			if($age >25)
				echo 'You are young.';
			else
				echo 'You are young at heart';
		
		}
		display_text($_POST['name'], $_POST['age']);
		
		?>
	
	</body>




</html>