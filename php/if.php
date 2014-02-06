<?php
$a = 2;
$b = 5;
$c = '5';
if ($a < $b) {
	echo "$a is less than $b\n";
} else if( $b > $a ) {
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	echo "$b is greater than or equal to $c\n";
}
else if($b <= $c) {
	echo "$b is greater than or equal to $c\n";
}
if ($b == $c) {
	echo "$b is equal value $c\n";
}
elseif ($b === $c) {
	echo "$b is equal value and type $c\n";
}
elseif ($b != $c) {
	echo "$b is not equal to $c\n";
}
else if($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>