<?php
 
 // random number
$number = rand(1,100);
//prompt user to pick a number using fwrite stdout
//fwrite(STDOUT, 'Guess a number!! ');
//$guess fgets stdin
//$guess = fgets(STDIN);
//if $guess is right echo winner!

do {

	fwrite(STDOUT, 'Guess a number!! ');

		$guess = fgets(STDIN);

		if ($number < $guess) {
			echo 'LOWER! ';

		} elseif ($number > $guess) {
			echo 'HIGHER! ';
		}


} while ($number != $guess);

echo 'WINNER';




// if ($guess = {
// 	echo 'WINNER! ';
// }
// 	else ($guess < rand(1,100) {
// 		echo 'HIGHER';
	
// }
// 	else ($guess > rand(1,100) {
// 		echo 'LOWER';
// 	}

// while (($guess < rand(1,100)) || ($guess > rand(1,100)));
//while ($guess < STDIN) echo 'higher'
// ||($guess > STDIN) echo 'lower'

exit(0)
?>
