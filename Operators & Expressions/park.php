<?php

//problem from https://www.pbinfo.ro/probleme/3179/parc2

function park($n){
    echo $n * ($n * ($n * ($n * $n)));

}

$n = fgets(STDIN);

park($n);