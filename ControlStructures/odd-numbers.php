<?php

function oddNumbers($number){
    $array = str_split($number);
    $countOdd = 0;
    for ($i=0; $i < 3; $i++){
        if ($array[$i] % 2 != 0){
            $countOdd = $countOdd + 1;
        }
    }

    echo $countOdd;
}

$number = fgets(STDIN);

oddNumbers($number);
