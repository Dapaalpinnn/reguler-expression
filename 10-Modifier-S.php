<?php 

$matches = [];

$text =
<<<text
Apple
Watermelon
Lemon
Pineapple
text;

// Single Line and Incase Sensitive
$regex_two = preg_match_all("/Apple.|watermelon.|lemon./si", $text, $matches); 

print_r($matches); 

?>