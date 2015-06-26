<?php
$adjective = array(
	'Blue',
	'Hot',
	'Stinky',
	'Purple',
	'Sweet',
	'Bloody',
	'Smooth',
	'Soft',
	'Spoiled',
	'Orange');
$noun = array(
	'Pizza',
	'Socks',
	'Cheeseburger',
	'Ball',
	'Truck',
	'Computer',
	'Carpet',
	'Basket',
	'Grass',
	'Banana')
?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<style>
	body {
		background-color: #000;
	}
	.centered {
		text-align: center;
		color: #f00;
	}
	</style>
</head>
<body>
<h1 class="centered"><?= $adjective[array_rand($adjective)];?> <?= $noun[array_rand($noun)];?></h1>
</body>
</html>