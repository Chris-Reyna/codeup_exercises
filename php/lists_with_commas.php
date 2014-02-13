<?php

 function humanized_list($string) {

 	$physicists_array = explode(', ', $string);

 	sort($physicists_array);

	$last_item = array_pop($physicists_array);

	array_push($physicists_array, 'and ' . $last_item);

	$famous_fake_physicists = implode(', ', $physicists_array);

	return $famous_fake_physicists;
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = humanized_list($physicists_string);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;



?>