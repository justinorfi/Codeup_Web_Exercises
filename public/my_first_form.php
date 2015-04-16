<?php
	var_dump($_POST);
	var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World!</title>
    <link rel="stylesheet" type="text/css" href="css/site.css">
</head>
<body>
    <h1 class="fancy-header">User Login</h1>
<form method="POST" action="/my_first_form.php">
    <p><label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username"></p>
    <p><label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter Password"></p>
    <p><button type="submit">Login</button></p>
</form>
<form method="POST" action="/my_first_form.php">
    <h2>Compose an E-Mail</h2>
    <p><label for="compose_email">To:</label>
        <input id="compose_email" name="compose_email" type="text" placeholder="Enter Recipient's E-Mail Address"></p>
    <p><label for="cc_email">CC:</label>
        <input id="cc_email" name="cc_email" type="text"></p>
    <p><label for="subject">Subject:</label>
        <input id="subject" name="subject" type="text"></p>
    <p><textarea id="email" name="email" rows="5"  cols="80" value=""placeholder="Compose your E-Mail here."></textarea></p>
    <p><label><input type="checkbox" name="save" value="yes"> Save inside 'Sent' folder?</input></label></p>
    <p><button type="submit">Send E-Mail</button></p>
</form>
<section>
<form method="POST" action="my_first_form.php">
    <h2>Multiple Choice Test</h2>
    <p>Who is the actor that portays Tyrion Lannister?</p>
    <p><label><input type="radio" name="q1" value="incorrect">Damon Wayans</label></p>
    <p><label><input type="radio" name="q1" value="incorrect">Verne Troyer</label></p>
    <p><label><input type="radio" name="q1" value="correct">Peter Dinklage</label></p>
    <p><label><input type="radio" name="q1" value="incorrect">Helena Bonham Carter</label></p>
<br>
    <p>The first movie that Johnny Depp appeared in:</p>
    <p><label><input type="radio" name="q2" value="incorrect">Don Juan De Marco</label></p>
    <p><label><input type="radio" name="q2" value="incorrect">21 Jump Street</label></p>
    <p><label><input type="radio" name="q2" value="incorrect">Pirates of the Carribean</label></p>
    <p><label><input type="radio" name="q2" value="correct">Nightmare on Elm Street</label></p>
<br>
    <p>Who won the 2015 NCAA Basketball National Title?</p>
    <p><label><input type="radio" name="q3" value="correct">Wisconsin</label></p>
    <p><label><input type="radio" name="q3" value="incorrect">Duke</label></p>
    <p><label><input type="radio" name="q3" value="incorrect">Kentucky</label></p>
    <p><label><input type="radio" name="q3" value="incorrect">Michigan State</label></p>
<br>
    <h3 >BONUS QUESTION</h3>
    <p>What Years did the Dallas Cowboys win the Super Bowl? HINT: (5)</p>
    <p><label><input id="1969" type="checkbox" name="q3[]" value="incorrect">1969</label></p>
    <p><label><input id="1971" type="checkbox" name="q3[]" value="correct">1971</label></p>
    <p><label><input id="1973" type="checkbox" name="q3[]" value="incorrect">1973</label></p>
    <p><label><input id="1977" type="checkbox" name="q3[]" value="correct">1977</label></p>
    <p><label><input id="1982" type="checkbox" name="q3[]" value="incorrect">1982</label></p>
    <p><label><input id="1985" type="checkbox" name="q3[]" value="incorrect">1985</label></p>
    <p><label><input id="1989" type="checkbox" name="q3[]" value="incorrect">1989</label></p>
    <p><label><input id="1990" type="checkbox" name="q3[]" value="incorrect">1990</label></p>
    <p><label><input id="1992" type="checkbox" name="q3[]" value="correct">1992</label></p>
    <p><label><input id="1993" type="checkbox" name="q3[]" value="correct">1993</label></p>
    <p><label><input id="1994" type="checkbox" name="q3[]" value="incorrect">1994</label></p>
    <p><label><input id="1995" type="checkbox" name="q3[]" value="correct">1995</label></p>
    <p><label><input id="1997" type="checkbox" name="q3[]" value="incorrect">1997</label></p>
<input type="submit" value="Submit Test">
</form>
</section>
<aside>
<form method="GET" action="/my_first_form.php">
    <label for="weapon" name="weapon"><h3>You're hunting WABBITS, what weapon do you use?</h3></label>
    <select id="name" name="weapon[]" multiple>
        <option value="1">Rifle</option>
        <option value="2">Shotgun</option>
        <option value="3">Carrot</option>
        <option value="4">Fish</option>
        <option value="5">Boot</option>
        <option value="6">Slingshot</option>
        <option value="7">Crossbow</option>
        <option value="7">None (Pascifist)</option>
    </select>
    <input type="submit" value="Send">
</form>
</body>
</html>

