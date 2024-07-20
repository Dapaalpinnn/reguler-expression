<?php 

$matches = [];

$text = 
<<<text
batk 
bat k
batuk
batak
batok
batik
text;

// Titik (.) mewakili semua karakter kecuali newline
$regex_one = preg_match_all("/bat.k/", $text, $matches); 
var_dump($matches);

?>