<?php
/*Extrem cases: 
    "·$··"$   hola     ;Munddo
    "·$··"$   hola     _;Munddo_ 
*/
function filterLettersAndNumbers(string $input): string {
    return preg_replace('/[^a-zA-Z0-9\s_]/', '', $input);
}

function filterWhiteSpacesToUnderscore(string $input): string {
    $input = str_replace(" ","_",$input);
    $input = preg_replace('/_+/', '_', $input);
    return $input;
}


$text_to_parse = readline();
$parsed_text = filterLettersAndNumbers($text_to_parse);
$parsed_text = trim($parsed_text);
$parsed_text = trim($parsed_text,"_");
$parsed_text = strtolower($parsed_text);
$parsed_text = filterWhiteSpacesToUnderscore($parsed_text);
var_dump($parsed_text);

?>
