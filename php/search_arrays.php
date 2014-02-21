<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name, $arrays) {

	$results = array_search($name, $arrays);

	if ($results === FALSE) {

		return FALSE;
	}
	return TRUE;
}
var_dump(search('Tina', $names));
var_dump(search('Bob', $names));


function compare($array1, $array2) {

	$in_common = 0;

	foreach ($array1 as $key => $value) { //undefiend variable error

		$results = array_search($value, $array2); 

		if (is_numeric($results)) {

			$in_common++;
		} 

	}
		return $in_common;

}

echo 'There are ' . compare($names, $compare) . ' names in common' . "\n";