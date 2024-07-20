<?php 

$matches = [];

$text = 
<<<text
12345678910
abcdefghijklamnopqrstuvwxyz
ABCDEFGHIJKLMNOPQRSTUVWXYZ
03030101040405
text;

$regex = preg_match_all("/[012][0-9]|30/", $text, $matches);
var_dump($matches);

$regex = preg_match_all("/^[012][0-9]|30/", $text, $matches);
var_dump($matches);

?>