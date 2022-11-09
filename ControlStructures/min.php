<?php

function minim($x, $y, $z){
    if ($x < $y){
        echo $x;
    } elseif ($z < $x){
        echo $z;
    } else {
        echo $y;
    }
}

fscanf(STDIN, "%d %d %d",  $x, $y, $z);
minim($x, $y, $z);