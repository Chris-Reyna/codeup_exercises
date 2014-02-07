<?php

if ($argc == 4) {

	$min = $argv[1];

	$max = $argv[2];

	$numwithinrange = $argv[3];

} else {

	echo " 1st number is your min, 2 nummber is your max, 3rd number must be within that range\n";

	exit(0);
}

if (!is_numeric($min) || !is_numeric($max) || !is_numeric($numwithinrange)) {

	echo "I said use a number!!\n";

	exit(0);
}








for ($v = $min; $v <= $max; $v += $numwithinrange) {

	echo "$v \n";
}



