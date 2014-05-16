<?php


class Hello{

	public static $defaultMessage = "Hello, World!";

	public function sayHello($to = null) {
		if (!empty($to)) {
			eco "Hello, $to!" . PHP_EOL;
		}else{
			echo self::$defaultMessage . PHP_EOL;
		}
	}
}

//scope resolution 
echo Hello::$defaultMessage . PHP_EOL;

$h1 = new Hello();
$h2 = new Hello();

$h1->sayHello("Codeup");
$h2->sayHello();



?>