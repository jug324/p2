<?php
if(isset($_GET['wordcount']) && ($_GET['wordcount'] >= 2 && $_GET['wordcount'] <=7)) {$wordnumber = $_GET['wordcount'];}
else { $wordnumber ='2';}

$password = array_rand($wordbank, $wordnumber); 

if(isset($_GET['number']) && ($_GET['number'] === 'include')) {$number = array_rand($numberbank, 1);}
else{ $number ='';}

if(isset($_GET['symbol']) && ($_GET['symbol'] === 'include')) {$symbol = array_rand($symbolbank, 1);}
else{ $symbol ='';}

if(isset($_GET['number']) && ($_GET['number'] === 'include')) {$number_check = 'checked="checked"' ;}
else {$number_check = '';}

if(isset($_GET['symbol']) && ($_GET['symbol'] === 'include')) {$symbol_check = 'checked="checked"' ;}
else {$symbol_check = '';}

if(isset($_GET['wordcount']) && ($_GET['wordcount'] >= 2 && $_GET['wordcount'] <=7)) {$startnumber = 'selected';}
else{ $startnumber ='';}