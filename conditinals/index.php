<?php

$month = 'January';

// if
if($month == 'January') {
	echo 'It\'s Jan';
} elseif($month == 'February') {
	echo 'It\'s Feb';
} else {
	echo 'Not the right month!';
}

// || - or, && - and

if($month !== 'January' && $month !== 'June') {
	echo 'Is not May or June';
} else {
	echo 'It is one of those.'
}

// switch
switch ($month) {
	case 'January':
		echo 'It is Jan!';
		break;

	case 'February':
		echo 'It is Feb!';
		break;

	default:
		echo 'Not a right month!';
}

// lookups
$months = array(
	'January' 	=> 'It is Jan',
	'February' 	=> 'It is Feb',
	'March' 	=> 'It is March'
);

echo isset($months[$month]) ? $months[$month] : 'Not the right month!'; 
// echo $months[$month];
// echo $months['January'];

?>