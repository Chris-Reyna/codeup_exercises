<?php


for($i = 1; $i <= 100; $i++) {

	$fizz = ($i % 3 == 0);

	$buzz = ($i % 5 == 0);

	$fizzbuzz = ($i % 3 == 0 && $i % 5 == 0);
	
	if ($fizzbuzz) {
		echo "FizzBuzz\n";
	}elseif ($buzz) {
		echo "Buzz\n";
	}elseif ($fizz) {
		echo "Fizz\n";
	}else {
		echo "$i\n";
	}
}