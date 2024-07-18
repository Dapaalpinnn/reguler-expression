<?php 

$matches = [];

$text = 
<<<text
111111111111111128901230461266298149862
ahshakbsjkabfkfjbdjkvb
text;

// Angka 1 sebanyak 9 digit
$regex_one = preg_match_all("/1{9}/", $text, $matches); 
var_dump($matches);

// Angka 1 dengan minimal 2 digit dan maksimal tidak terbatas
$regex_two = preg_match_all("/1{2,}/", $text, $matches); 
var_dump($matches);

// Angka 1 dengan minimal 3 digit dan memiliki batas menjadi 3 digit kelompok 
$regex_four = preg_match_all("/1{3,3}/", $text, $matches); 
var_dump($matches);

?>