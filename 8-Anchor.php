<?php 

$matches = [];

$text_one = 
<<<text
Apple is my favorite fruit
The apple is available
Andi eats a lot of apples
text;

$text_two =
<<<text
Apple
text;

// Kata yang berada diawal (diawali)
$regex_two = preg_match_all("/^Apple/", $text_one, $matches); 
var_dump($matches); 

// Kata yang berada diakhir (diakhiri)
$regex_two = preg_match_all("/apples$/", $text_one, $matches); 
var_dump($matches); 

// Kata yang berada di awal dan akhir (diawali dan diakhiri)
$regex_two = preg_match_all("/^Apple$/i", $text_two, $matches); 
var_dump($matches); 

?>