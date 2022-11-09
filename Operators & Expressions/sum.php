<?php

//problem from https://www.pbinfo.ro/probleme/939/sum00
// function calculates the sum of two numbers;

function sum($a, $b){
    echo $a + $b;
}

fscanf(STDIN, "%d %d", $a, $b);

sum($a, $b);