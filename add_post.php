<html>
	<head></head>
	<title>Form Handling - Add_Post Sample PHP</title>
	<body>
	<?php $x=$_POST['x'] ?>
	<?php $y=$_POST['y'] ?>
	Hello you entered <br>
	X: <?php echo $x; ?><br>
	Y: <?php echo $y; ?><br>
	
	The sum of numbers from X to Y = 
	
	
	<?php
		$sum = 0;
		$a = $x;
		$b = $y;
		
		if ($a == $y)
		echo "ZERO";
		
	?>
	
	
	
	<?php
		$sum = 0;
		$a = $x;
		$b = $y;
	
		
		if ($a < $b)
		
		$sum = [$b * ($b + 1) / 2] - [($a-1) * $a/2];
		echo $a;
		echo $b;
		echo $sum;
	?>
	
	<?php
		
		
		if ($a > $b)
		
		$temp1 = $x;
		$a = $b;
		
		$a++;
		$sum = $sum + $a;
		$c = $sum + 1;
		
		//echo $c;
	?>
	
	</body>
</html>