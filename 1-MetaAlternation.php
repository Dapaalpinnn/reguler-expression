<?php 

$matches = [];

$text = 
<<<text
Steven
Alexander
Luna
Lyne
text;

$regex = preg_match_all("/Steven|Luna|Lyne/i", $text, $matches);
print_r($matches);

?>