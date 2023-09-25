<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factorial Program using loop in PHP</title>
</head>
<body>
	<form method="post">
		Enter the number:<br>
		<input type="number" name="number" id="number">
		<input type="submit" value="submit" name="submit" />
	</form>

	<?php
		if($_POST) {
			$fact = 1;
			// getting value from input text box 'number'
			$number = $_POST['number'];
			echo "Factorial of $number:<br><br>";
			// start loop
			for ($i = 1; $i <= $number; $i++) {
				$fact = $fact * $i;
			}
			echo $fact . "<br>";
		}
	?>
</body>
</html>