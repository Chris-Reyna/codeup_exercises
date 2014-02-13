<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name, $arrays) {

//	$name = '';

	//$name = 'Bob';

	$results = array_search($name, $arrays);

	

	if ($results === FALSE) {

		return FALSE;
	}

	return TRUE;
}

//var_dump my function and set the name desired and variable to search
var_dump(search('Tina', $names));
var_dump(search('Bob', $names));