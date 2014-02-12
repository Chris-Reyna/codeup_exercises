<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function empty_set($check) {

	if (isset($check)) {

		return true;
	}elseif (!empty($check)) {	 
		return true;
	}else{
		return false;
	}


}	



// var_dump(empty_set($something));

// TEST: If var $nothing is set, display '$nothing is SET'

if (empty_set($nothing)) {

		echo "\$nothing is SET\n"; //true
}else{

	 echo "\$nothing is not SET\n"; //false
}


// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (empty_set($nothing)) {

		echo "\$nothing is not empty\n"; //true
}else{
		echo "\$nothing is empty\n"; //false
}






// TEST: If var $something is set, display '$something is SET'
if (empty_set($something)) {

		echo "\$something is SET\n";
}else{

	 echo "\$something is not SET\n";
}


// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results