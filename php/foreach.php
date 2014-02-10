<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11 );

foreach ($things as $thingy) {

	if (is_int($thingy)) {

		echo "{$thingy} is an integer\n";	}

	elseif (is_float($thingy)) {

		echo "{$thingy} is a float\n";	}

	elseif (is_bool($thingy)) {

		echo "{$thingy} is a boolean\n";	}

	elseif (is_array($thingy)) {

			

			foreach ($thingy as $array) {

				echo "{$array} is a number\n";
			}	}

	elseif (is_null($thingy)){

		echo "{$thingy} is null\n";	}

	elseif (is_string($thingy)) {

		echo "{thingy} is a string\n";
	}
}

?>

}