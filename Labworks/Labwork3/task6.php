<?php
	function sortNumericalArray($array) {
		// Check if the array is empty
		if (!$array) {
			return $array;
		}

		// Sort the array in ascending order
		sort($array);

		// Return the sorted array
		return $array;
	}

	// Example usage:
	$array = [5, 3, 2, 1, 4, 69, 420, 1337, 666, 7, 9, 8, 6];
	$sortedArray = sortNumericalArray($array);

	print_r($sortedArray);
?>