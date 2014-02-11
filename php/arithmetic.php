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

		echo $a + $b . "\n";
 	}			

}

function subtract($a,$b) {
	if (valid($a, $b)) {
	echo $a - $b . "\n";
	}
}

function multiply($a,$b) {
	if (valid($a, $b)) {
	echo $a * $b . "\n";
	}
}

function divide($a,$b) {

	if (valid($a, $b)) {

		return false;

	}else if (($b > $a) || ($b == 0) || ($a == 0)) {

		

		return false;
		
	}else {	echo $a / $b . "\n";
		
	}
	
}

function mod($a,$b) {
	if (valid($a, $b)) {
	echo $a % $b . "\n";
	}

}

$first = 100;
$second = 67;

valid('hi', 3); 
add($second, 9);
subtract(40, 'h');
multiply('five',9);
divide(19, 20);
mod('first', 3);

?>