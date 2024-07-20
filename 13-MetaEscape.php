<?php 

// Escape Meta Character Backslash

$matches = [];

$text = 
<<<text
dapaalpinnnxxxxxxxxx.com
lyneee.com
text;

$regex = preg_match_all("/[a-z]+.[a-z]+/", $text, $matches); 

var_dump($matches); 

?>