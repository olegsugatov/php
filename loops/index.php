<?php

$arr = ['Jeff', 'Collis', 'Oleg', 'Amanda'];

// for
foreach ($arr as $name) {
	echo $name;
}

// associative array

$position = array(
	'ceo' => 'Collis',
	'manager' => 'Tash',
	'instructor' => 'Oleg',
);

foreach ($position as $title => $name) {
	echo "<li><strong>$title</strong> - $name</li>";
}

// +=1 ++
for($i = 0; $i < count($arr); $i++)
	echo "<li>$arr[$i]</li>";

$i = 0; 
while($i < 10) {
	// echo "<li>$arr[$i]</li>";
}

?>

