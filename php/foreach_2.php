<?php

$books = array(

	'The Hobbit' => array(

		'published' => 1937,

		'author' => 'J. R. R. Tolken',

		'pages' => 310),

	'Game of Thrones' => array(

		'published' => 1996,

		'author' => 'George R. R. Martin',

		'pages' => 835),

	'The Cathcher in the Rye' => array(

		'published' => 1951,

		'author' => 'J. D. Salinger',

		'pages' => 220),

	'A Tale of Two Cities' => array(

		'published' => 1859,

		'author' => 'Charles Dickens',

		'pages' => 544)

	);

foreach ($books as $title => $book) {

	echo "$title\n";

		foreach ($book as $key => $value) {

			echo "$key is $value\n";

		}

}

?>