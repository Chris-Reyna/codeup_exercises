<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//function array_search($names) {

//	$name = '';

	$name = 'Amy';

	$results = array_search($name, $names);

	

	if ($results) {

		echo $names [$results];
	}
//}

var_dump($results);