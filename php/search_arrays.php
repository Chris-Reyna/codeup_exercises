<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name, $arrays) {

	//set variable to = php search function to new $variables
	$results = array_search($name, $arrays);

	//set results = to false if false or not entered
	if ($results === FALSE) {

	// if search reads false then return false
		return FALSE;
	}
		//if not return true
	return TRUE;
}

//var_dump my function and set the name desired and variable to search
var_dump(search('Tina', $names));
var_dump(search('Bob', $names));


function compare($array1, $array2) {

	$in_common = 0;

	foreach ($array as $name) { //undefiende variable error

		$results = array_search($name, $array2); 

		if (is_numeric($result)) {

			$in_common++;
		} 
		return $in_common;

	}

}

echo compare($compare, $names);