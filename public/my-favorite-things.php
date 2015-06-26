<?php
$things = array(
	'Tennis',
	'Steak',
	'Dark Beer',
	'Oakland Raiders',
	'Cheese',
	'Lavender',
	'Competition');
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
	<style>
	body {
		background-color: #555;
	}
	.header {
		text-align: center;
		color: #0f0;
	}
	.table {
		border: 1px solid #000;
	}
	.tableHeader {
		background-color: #019;
		color: #000;
	}
	.even {
		background-color: #222;
	}
	</style>
</head>
<body>
<header>
	<h1 class="header">My Favorite Things</h1>
</header>
<main>
	<table class="table">
		<th class="tableHeader">Index</th>
		<th class="tableHeader">Favorite Things</th>
		<?php foreach ($things as $key => $val) { ?>
		<tr><td><?= $key ?></td><td><?= $val ?></tr>
		<?php };
		if ($key % 2 = 0) { ?>
		<tr class="even"><td><?= $key ?></td><td><?= $val ?></tr>
		<?php } ?>

	</table>
</body>
</html>