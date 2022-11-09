<?php

//problem taken from https://www.pbinfo.ro/probleme/1273/uciv

//function displays the last digit of a number ex: 120 + 22 = 142 => last digit of 142 = 2;

function lastDigit($a, $b){
    $number = $a + $b;
    $lastDigit = $number % 10;
    echo $lastDigit;
}


fscanf(STDIN, "%d %d", $a, $b);

lastDigit($a, $b);
