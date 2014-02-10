<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11 );

foreach ($things as $thingy) {

	if (is_scalar($thingy)) {

		echo "{$thingy} is a scalar\n";	}



	elseif (is_array($thingy)) {

			

			foreach ($thingy as $array) {

				echo "{$array} is a number\n";
			}
				}

	elseif (is_null($thingy)){

		echo "{$thingy} is null\n";	}


}

?>

