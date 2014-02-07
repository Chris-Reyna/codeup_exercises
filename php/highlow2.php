<?php

if ($argc == 3) {


$min = $argv[1];

$max = $argv[2];

} else {

	echo "Follow directions and put in a min and max value NOW!\n";

	exit(0);
}

if (!is_numeric($min) || !is_numeric($max)) {

	echo "I said use a number BRO!!\n";

	exit(0);
}


$number = mt_rand($min, $max);






$attempts = 0;

fwrite(STDOUT, 'Guess a number!! ');

$guess = fgets(STDIN);

		$attempts++;

while ($guess != $number) {
	

	if ($guess < $number) {

		echo "HIGHER\n";

		$attempts++;

	} elseif ($guess > $number) {

		echo "LOWER\n";

		$attempts++;
	}

	fwrite(STDOUT, 'Guess a number!! ');
	
	$guess = fgets(STDIN);
}



echo "WINNER! Completed in $attempts tries!!\n";



?>