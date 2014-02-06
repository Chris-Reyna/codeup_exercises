<?php
$a = 5;
$b = 10;
$c = '10';
if ($a < $b) {
	
	echo "$a is less than $b\n";
}

if ($b > $a) {
	
	echo "$b is greater than $a\n";
}

if ($b > $c) {
	echo "$b is greater than $c\n";
}
if ($b <= $c) {
	echo "$b is greater than or equal to $c\n";
}
if ($b == $c) {
	echo "$b is equal value $c\n";
}
if ($b === $c) {
	echo "$b is equal value and type $c\n";
}
if ($b != $c) {
	echo "$b is not equal to $c\n";
}
if ($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>