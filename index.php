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
<option value="2" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 2)) echo 'selected';?>>2</option>
<option value="3" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 3)) echo 'selected';?>>3</option>
<option value="4" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 4)) echo 'selected';?>>4</option>
<option value="5" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 5)) echo 'selected';?>>5</option>
<option value="6" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 6)) echo 'selected';?>>6</option>
<option value="7" <?php if(isset($_GET['wordcount']) && ($_GET['wordcount'] == 7)) echo 'selected';?>>7</option>
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