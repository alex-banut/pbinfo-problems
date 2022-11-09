<?php
//taken from https://www.pbinfo.ro/probleme/2240/animale;

function animalsNumber($c){
    $p = $c * 2;
    $g = $p * 2;
    echo $c + $p + $g;
}

$c = fgets(STDIN);

animalsNumber($c);