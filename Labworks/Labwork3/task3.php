<?php
	// Create a table array
	$table = array(
		array('Age', 'Firstname', 'Lastname'),
		array(50, 'Smith', 'Jackson'),
		array(94, 'Jill', 'Eve'),
		array(80, 'John', 'Doe')
	);

	// Display the table
	echo '<table>';
	foreach ($table as $row) {
		echo '<tr>';
		foreach ($row as $cell) {
			echo '<td>' . $cell . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>