<?php 

$matches = [];

$text = 
<<<text
Line 1 : Apple
Line 2 : Apple
Line 3 : Apple
Line 4 : Apple
text;

// Multiline and Incase Sensitive
$regex = preg_match_all("/apple$/mi", $text, $matches); 
print_r($matches); 

?>