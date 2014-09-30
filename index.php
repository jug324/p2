<?php error_reporting(-1) ; ini_set ("display_errors", 1) ; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Random Password Generator</title>
<link rel='stylesheet' href="p2styles.css"/>
<?php require ("banks.php") ?>
<?php require ("logic.php") ?>
</head>

<body id="container">
<h1>Random Password Generator</h1>
<h3>Use the tool below to generate a random password comprised of multiple words</h3>
<div class="password"><p>Password:</p><p class="passwordbox"><?php foreach ($password as $value)
    echo $value;?><?php echo $symbol.$number ?></p></div>
<form action="index.php" method="GET">
<p>Number of words to use:
<select name="wordcount" >
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select></p>
<p>Should it include a number?   Yes<input type="checkbox" name="number" value="include"></p>
<p>Should it include a symbol?   Yes<input type="checkbox" name="symbol" value="include"></p>
<div><input type="submit" value="Create Password"></div>
</form>
<br>
<br>
<div><p>This password generator is inspired by the comic XKCD. I hope it serves you well.</p><img src="http://imgs.xkcd.com/comics/password_strength.png" class="xkcd" /><p><a href="http://xkcd.com/936/">XKCD comic by Randall Munroe</a></p></div>
</body>
</html>