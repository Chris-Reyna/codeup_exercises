<?php

function add($a,$b) {

	echo $a + $b . "\n";

}

function subtract($a,$b) {

	echo $a - $b . "\n";

}

function multiply($a,$b) {

	echo $a * $b . "\n";

}

function divide($a,$b) {

	echo $a / $b . "\n";

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