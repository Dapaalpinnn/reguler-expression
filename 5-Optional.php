<?php 

$matches = [];

$text = 
<<<text
batk
batuk
batak
batok
batik
text;

// Huruf 'a-z' bersifat opsional
$regex_one = preg_match_all("/bat[a-z]?k/", $text, $matches); 
print_r($matches);

?>