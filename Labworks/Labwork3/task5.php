<?php
	function isPrime($number) {
		// Check if the number is less than 2 (not prime)
		if ($number <= 1) {
			return false;
		}

		// Check for factors from 2 to the square root of the number
		for ($i = 2; $i <= $number; $i++) {
			// If the number is divisible by any value in this range, it's not prime
			if ($number % $i == 0) {
				return false;
			}
		}

		// If no factors were found, the number is prime
		return true;
	}

	// Test the function
	$number = 17;
	if (isPrime($number)) {
		echo "$number is a prime number.";
	} else {
		echo "$number is not a prime number";
	}
?>