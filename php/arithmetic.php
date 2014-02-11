<?php

function add($a,$b) {

	if (is_numeric($a) && is_numeric($b)) {

		echo $a + $b . "\n";

	}else {	

		echo "ERROR Please enter a number!!\n";
	}

		

}

function subtract($a,$b) {

	echo $a - $b . "\n";

}

function multiply($a,$b) {

	echo $a * $b . "\n";

}

function divide($a,$b) {

	echo $a / $b . "\n";
//can not divide by zero
}

function mod($a,$b) {

	echo $a % $b . "\n";

}

$first = 100;
$second = 67;

add($second, 5);
subtract(40, 10);
multiply(5,6);
divide($first, 5);
mod(154, 5);

?>