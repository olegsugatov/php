<?php

// cmd+D - multiple coursorce
// assosiative array
$tuts_sites = array (
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://psd.tutsplus.com',
	'wptuts' => 'http://wp.tutsplus.com'
);

// short syntax
// $tuts_sites = ['nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+']

// standart array syntax
// $tuts_sites = array('nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+');
// print_r($tuts_sites);

$months = array('january', 'february', 'march', 'april', 'may');
var_dump($months);
echo $months[2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
<h1>Tutsplus Sites</h1>
	<?php 
		// foreach ($tuts_sites  as $name => $url ) {
		// echo "<li><a href='$url'>$name</a></li>" ;

		// игнорирвкет двойные кавычкм \", ucwords - capitalase
		// форматирование надписи
		// echo "<li><a href=\"$url\">" . ucwords($name) . "+</a></li>";
		// }

		//	foreach ($tuts_sites  as $site) {
		//	echo "<li>$site</li>" ;
		//}

		foreach ($tuts_sites as $name => $url) : ?> 
			<li>
				<!-- <a href="<?php echo $url; ?>"><?php echo $name; ?></a> -->
				<a href="<?= $url; ?>"><?= $name; ?></a>
			</li>
		<?php endforeach ?>

</body>
</html>