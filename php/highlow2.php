<?php

$number = rand(1,100);

fwrite(STDOUT, 'Guess a number!! ');

$guess = fgets(STDIN);

while ($guess != $number) {
	

	if ($guess < $number) {

		echo "HIGHER\n";

	} elseif ($guess > $number) {

		echo "LOWER\n";
	}

	fwrite(STDOUT, 'Guess a number!! ');
	
	$guess = fgets(STDIN);
}


echo "WINNER!\n";



?>