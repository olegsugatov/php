<?php>


/*
	printf
	sprintf
	sscanf 
*/


// $name = "Joe";
// $age = 27;
// $greeting = printf("My name is %s and i am %d", $name, $age);

// echo $greeting;
// printf("Today is %s, %s %d", 'June', '7th', '2012');

// sprintf - return formated string
// $posted = sprintf("Today is %s, %s %d", 'June', '7th', '2012');
// echo $posted;

// sscanf - inverst printf, [^,] - everything is not a coma, binding as string
// $results = sscanf("June 7th, 2012", "%s %[^,], %d");
// print_r($results);

// list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");
sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);
echo $year;

// list($name, $age) = array('Jeffrey', 27);
// echo $name;

?>
