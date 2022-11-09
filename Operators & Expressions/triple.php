<?php

//problem https://www.pbinfo.ro/probleme/814/triplul

function triple($x, $y){
    $value = ($y * 3) - $x;
    echo $value;
}

fscanf(STDIN, "%d %d", $x, $y);

triple($x, $y);