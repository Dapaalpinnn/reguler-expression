<?php 

// Escape Meta Character

$matches = [];

$text = 
<<<text
I LIKE APPLE 
i like pineapple
123126494694529579
text;

$regex = preg_match_all("/\w*[[:upper:]]/", $text, $matches); 
print_r($matches); 

$regex = preg_match_all("/\w*[[:lower:]]/", $text, $matches); 
print_r($matches); 

$regex = preg_match_all("/\p{Lu}/", $text, $matches); 
print_r($matches); 

?>