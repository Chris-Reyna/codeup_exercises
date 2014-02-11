<?php

// function valid ($a, $b) {
// 	return (is_numeric($a) && is_numeric($b));
// }

function valid($a,$b) {

	if (!is_numeric($a) || !is_numeric($b)) {

		return false;
	}else {	 
		return true;
	}


}	


function add($a,$b) {

	if (valid($a, $b)) {
		return $a + $b;
 	} else {
 		return 0;
 	}		

}

function subtract($a,$b) {
	if (valid($a, $b)) {
	return $a - $b;
	}else { return 0;}
}

function multiply($a,$b) {
	if (valid($a, $b)) {
	return $a * $b;
	}else { return 0;
	}
}
function divide($a,$b) {
	 if (($b > $a) || ($b == 0) || ($a == 0)) {

	 	return 0;


	}elseif (valid($a, $b)) {

		return $a / $b; }

		
	else {	return "invalid character";
		
	}
	
}

function mod($a,$b) {
	if (valid($a, $b)) {
	return $a % $b;
	}else {return 0;
	}
}
$first = 100;
$second = 67;

valid('hi', 3); 
echo add($second, 9) . PHP_EOL;
echo subtract(40, 'h') . PHP_EOL;
echo multiply('five',9) . PHP_EOL;
echo divide(19, 20) . PHP_EOL;
echo mod('first', 3) . PHP_EOL;

?>