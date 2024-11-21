<?php

function filterLettersAndNumbers(string $input): string {
    return preg_replace('/[^a-zA-Z0-9]/', '', $input);
}

$text_to_parse = readline();
var_dump($text_to_parse);
$parsed_text = trim($text_to_parse);
var_dump($parsed_text);
$parsed_text = strtolower($parsed_text);
var_dump($parsed_text);
$parsed_text = filterLettersAndNumbers($parsed_text);
var_dump($parsed_text);


?>



?>