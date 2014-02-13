<?php

//$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


$physicists_array = array("Gordon Freeman", "Smantha Carter", "Sheldon Cooper", "Quinn Mallory", "Bruce Banner", "Tony Stark");
//$item = "and";
$item2 = array_pop($physicists_array);
array_push($physicists_array, 'and ' . $item2);



 $famous_fake_physicists = implode(', ', $physicists_array);


 echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;


//Converts array into list n1, n2, ..., and n3
// function humanized_list($array) {
//   // Your solution goes here!
// }

// // List of famous peeps
// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// // Humanize that list
// $famous_fake_physicists = humanized_list($physicists_string);

// // Output sentence
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>