<?php

$number = mt_rand(1,100);


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