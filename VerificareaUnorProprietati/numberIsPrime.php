<?php

function primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
$number = 25;

$flag = primeCheck($number);

if ($flag == 1){
    echo "Prime";
} else {
    echo "Not prime";
}

