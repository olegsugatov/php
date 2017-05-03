<?php

// default $name
function say_hello($name = 'buddy') {
	return "Hi, there $name";
}

echo say_hello('Joe');

// <pre> array formating
$arr_j = array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher');



// helper function, first reusable function
function pp($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';	
}

pp($arr_j);


// function array_pluck($toPluck, $arr) {
// 	 $ret = array();

// 	 foreach ($arr as $item) {
// 	 	$ret[] = $item[$toPluck];
// 	 }
// 	 return $ret;
// }


// function known just local scope; die();
function array_pluck($toPluck, $arr) {
	return array_map(function($item) use($toPluck) ;
		return $item[$toPluck];
	}, $arr);
}

$people = array(
	array('name' => 'Oleg', 'age' => 31, 'occupation' => 'web developer'),
	array('name' => 'Mary', 'age' => 23, 'occupation' => 'bitch'),
	array('name' => 'Tangela', 'age' => 21, 'occupation' => 'designer ')
);

$names = array_pluck('name', $people);
foreach ($names as $name) {
	echo $name;
}


