<?php
	function reverseString($string) {
		$reversedString = "";
		for ($i = strlen($string) - 1; $i >= 0; $i--) {
			$reversedString .= $string[$i];
		}
		return $reversedString;
	}

	// Example usage:

	$string = "Really? Try again!";
	$reversedString = reverseString($string);

	print_r($reversedString);
?>