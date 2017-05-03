<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>
<h1>Variables</h1>

<?php

	// variables
	$name = "Jeffrey Way";
	print 'Hello ' . $name;

	// html + php
	echo '<p>Hello '. $name . '</p>';

?>
	<!-- php into html -->
	<p><?php echo 'Hello ' . $name; ?></p>
	<p><?php echo 'Hello again ' . $name; ?></p>
	<!-- https://www.youtube.com/watch?v=97CCCgSWC74 -->

</body>
</html>