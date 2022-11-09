<?php


function displayNumbersTwo($n){

    for ($i = 1; $i <= $n; $i++){
        echo $i . ' ';
    }

}

function displayNumbersTwoDesc($n){

    for ($i = $n; $i >= 1; $i--){
        echo $i . ' ';
    }
}

$n = fgets(STDIN);

displayNumbersTwo($n);

echo "\n";

displayNumbersTwoDesc($n);