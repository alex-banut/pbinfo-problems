<?php

// problem taken from https://www.pbinfo.ro/probleme/2828/acronim
// the function will take each uppercase character from the start of each word and will form an acronim;
// e.g. Academia de Politie Bucuresti => APB;

function acronim($text){
    $len = strlen($text);
    $acronim = '';

    for ($i = 0; $i < $len; $i++){
        if ((ctype_upper($text[$i]) && $text[$i-1] == ' ') || ($i == 0) && ctype_upper($text[$i])){
            $acronim = $acronim . $text[$i];
        }
    }

    echo $acronim;
}

$text = fgets(STDIN);

acronim($text);

?>