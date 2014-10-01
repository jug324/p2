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
<select name="wordcount">
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select></p>
<p>Should it include a number?   Yes<input type="checkbox" name="number" value="include" <?php echo $number_check ; ?> ></p>
<p>Should it include a symbol?   Yes<input type="checkbox" name="symbol" value="include" <?php echo $symbol_check ; ?> ></p>
<div><input type="submit" value="Create Password"></div>
</form>

<br>
<hr>
<br>
<div><p>This password generator is inspired by the comic XKCD. I hope it serves you well.</p><img src="http://imgs.xkcd.com/comics/password_strength.png" class="xkcd" alt="Password Strength" /><p><a href="http://xkcd.com/936/">XKCD comic by Randall Munroe</a></p></div>
</body>
</html>