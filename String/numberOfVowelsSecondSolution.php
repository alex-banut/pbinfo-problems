<?php

//problem from https://www.pbinfo.ro/probleme/890/nrvocale
// function counts all vowels and displays the most found vowel;

$text = fgets(STDIN);
$text = strtoupper($text);
$vowels = ['A' => 0, 'E' => 0, 'I' => 0, 'O' => 0, 'U' => 0];

for ($i = 0; $i < strlen($text); $i++) {
    if (isset($vowels[$text[$i]])) {
        $vowels[$text[$i]]++;
    }
}

echo array_search(max($vowels), $vowels, true);
?>

