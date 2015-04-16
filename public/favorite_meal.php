<!DOCTYPE html>
<html>
<head>
	<title>My favorite meal</title>
</head>
<body>
<header>
	<h1>Super Carne Guisada Tacos</h1>
</header>
<main>
	<h2>Ingredients</h2>
	<ol>
		<li>Tortillas</li>
		<li>Carne Guisada</li>
			<ul>
				<li>Marinated Beef Tips</li>
				<li>Water</li>
				<li>Flour</li>
				<li>Spices</li>
					<ul>
						<li>Chili Powder</li>
						<li>Cumin</li>
						<li>Garlic Powder</li>
						<li>Onion Powder</li>
					</ul>
			</ul>	
		<li>Refried Beans</li>
		<li>Cheese</li>
	</ol>
<p>
	<form method="POST" action="/favorite_meal.php">
		<label for="suggestion">Make a suggestion:</label></p>
		<p>
		<input name="suggestion" id="suggestion" type="text" placeholder="Enter your suggestion"></p>
		<p>
		<input type="submit" value="Send"></p>
	</form>

<?php
	var_dump($_POST)
?>	
</main>
<aside>
	<h3>Other foods you may like</h3>
	<ul>
		<li><a href="#" title="Beef_Enchiladas">Beef Enchiladas</a></li>
		<li><a href="#" title="Bean_Cheese">Bean & Cheese Tacos</a></li>
		<li><a href="#" title="Menudo">Menudo</a></li>
	</ul>	
</aside>
</body>
</html>