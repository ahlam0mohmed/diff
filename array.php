<?php
	// define array
	$a = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
	
	// print original array
	echo "Original Array : ";
	print_r($a);
	echo "<br>";
	// remove duplicate values by using
	// flipping keys and values
	$a = array_flip($a);

	// restore the array elements by again
	// flipping keys and values.
	$a = array_flip($a);

	// re-order the array keys
	$a= array_values($a);

	// print updated array
	echo "\nUpdated Array :  ";
    echo "<br>";
	print_r($a);
    
?>
