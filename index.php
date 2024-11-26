<?php
//Provar este caso: "·$··"$   hola     ;Munddo
function filterLettersAndNumbers(string $input): string {
    return preg_replace('/[^a-zA-Z0-9\s_]/', '', $input);
}

function filterWhiteSpacesToUnderscore(string $input): string {
    //This is not coded by Shakespeare,precisely, BUT...
    for($i = 0; $i < strlen($input); ++$i) {
        
    }
    return $input;    
}

$text_to_parse = readline();
$parsed_text = filterLettersAndNumbers($text_to_parse);
$parsed_text = trim($parsed_text);
$parsed_text = strtolower($parsed_text);
$parsed_text = filterWhiteSpacesToUnderscore($parsed_text);
var_dump($parsed_text);

?>
