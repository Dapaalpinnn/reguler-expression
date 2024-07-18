<?php 

// Modifier G => Global Match

$matches = [];

$text = 
<<<text
Line 1 : Apple
Line 2 : Apple
Line 3 : Apple
Line 4 : Watermelon
text;

$regex = preg_match_all("/line|watermelon/mi", $text, $matches); 

print_r($matches); 

?>