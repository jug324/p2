<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Random Password Generator</title>
<?php require ("logic.php") ?>
</head>

<body>
<h1>Random Password Generator</h1>
<h3>Use the tool below to generate a random password comprised of multiple words</h3>
<form action="index.php" method="GET">
<p>Number of words to use:
<select name="wordcount">
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select></p>
<p>Should it include a number?   Yes<input type="checkbox" name="number" value="include"></p>
<p>Should it include a symbol?   Yes<input type="checkbox" name="symbol" value="include"></p>
<p>Should the first letter be capitalized?   Yes<input type="checkbox" name="uppercase" value="include"></p>
<div><input type="submit" value="Create Password"></div>
</form>
<p>PASSWORD GOES HERE</p>

<div><p>This password generator is inspired by the comic XKCD. I hope it serves you well.</p><img src="http://imgs.xkcd.com/comics/password_strength.png" /><p><a href="http://xkcd.com/936/">XKCD comic by Randall Monroe</a></p></div>
</body>
</html>