<?php

function year($y)
{
    if ($y % 400 == 0){
        echo 'bisect';
    } elseif ($y % 4 == 0 && $y % 100 != 0){
        echo 'bisect';
    } else {
        echo 'nebisect';
    }
}

$y = fgets(STDIN);

year($y);