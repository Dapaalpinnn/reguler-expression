<?php 

$matches = [];

$text =
<<<text
apple
Apple
text;

// Incase Sensitive
$regex = preg_match_all("/apple/i", $text, $matches); 
print_r($matches); 

?>