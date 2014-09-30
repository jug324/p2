<?php


if(isset($_GET['wordcount']) && ($_GET['wordcount'] === '3' OR '4' OR'5' OR'6' OR'7')) {$wordnumber = $_GET['wordcount'];}
else{ $wordnumber ='3';}

$password = array_rand($wordbank, $wordnumber); 

if(isset($_GET['number']) && ($_GET['number'] === 'include')) {$number = array_rand($numberbank, 1);}
else{ $number ='';}

if(isset($_GET['symbol']) && ($_GET['symbol'] === 'include')) {$symbol = array_rand($symbolbank, 1);}
else{ $symbol ='';}