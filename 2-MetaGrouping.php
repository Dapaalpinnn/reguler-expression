<?php 

$matches = [];

$text = 
<<<text
I eat apple
I eat mango
I like apple
I like mango
I like cherry
text;

$regex = preg_match_all("/i (eat|like) (apple|mango|cherry)/i", $text, $matches);

print_r($matches);

?>