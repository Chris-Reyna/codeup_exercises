<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function empty_set($check) {

	if (isset($check)) {

		return true;
	}elseif (empty($check)) {	 
		return true;
	}else{
		return false;
	}


}	



// var_dump(empty_set($something));



if (empty_set($nothing)) {

		echo "\$nothing is SET\n";
}else{

	 echo "\$nothing is not SET\n";
}


if (empty_set($nothing)) {

		echo "$nothing is empty\n";
}else{
		echo "$nothing is not empty\n";
}


//var_dump(isset($nothing));
//var_dump(empty($nothing));


//var_dump(isset($nothing));

// TEST: If var $nothing is set, display '$nothing is SET'
//var_dump(empty_set($nothing));
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results