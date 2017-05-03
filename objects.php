<?php

$person = array(
	'first' => 'John',
	'last'	=> 'Doe',
	'job'	=> 'teacher'
);

// var_dump($person);

echo $person['first'];

$o = (object) $person;

echo $o->first;


// Create class
// class Person {
// 	public $name;
// 	public $job;

// 	public function __construct($name, $job){
// 		$this->name = $name;
// 		$this->job = $job;
// 	}

// 	public function communicate ($style = 'voice') {
// 		return 'communicating with ' . $style;
// 	}
// }

// $p = new Person('John', 'Teaher');
// var_dump($p);
// echo $p->communicate('telepathy');


// stdClass - empty generic class
$person = new stdClass;
$person->first = 'John';
$person->last = 'Doe';
$person->job = 'Teacher';

echo $person->first . ' ' . $person->last;

?>
