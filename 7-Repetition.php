<?php 

$matches = [];

$text = 
<<<text
batttttk
text;

// Huruf 't' minimal 0 atau lebih
$regex_two = preg_match_all("/bat*k/", $text, $matches); 
var_dump($matches);

// Huruf 't' minimal 1 atau lebih
$regex_one = preg_match_all("/bat+k/", $text, $matches); 
var_dump($matches);

?>