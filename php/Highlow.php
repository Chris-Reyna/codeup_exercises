<?php
 
if ($argc == 3) {

	$min = $argv[1];
	$max = $argv[2];

} else {

	echo "I need two numbers a min and a max\n";

	exit(0);
}

if (!is_numeric($min) || !is_numeric($max)) {

	echo "They must be numbers!!!\n";

	exit(0);
}




 // random number
$number = mt_rand($min,$max);

$attempts = 0;

do {

	fwrite(STDOUT, 'Guess a number!! ');

		$guess = fgets(STDIN);

			

		if ($number < $guess) {
			echo 'LOWER! ';

			$attempts++;

		} elseif ($number > $guess) {
			echo 'HIGHER! ';

			$attempts++;
		}


} while ($number != $guess);

echo "WINNER!! In $attempts tries!!\n";






exit(0)
?>
