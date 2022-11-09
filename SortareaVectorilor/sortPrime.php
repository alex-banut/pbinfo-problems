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


function sortPrimeNumbers($n, $str){

    $arr = explode(' ', $str);

    $primeArr = [];

    for ($i = 0; $i < $n; $i++){
        if (primeCheck($arr[$i])){
            $primeArr[] = $arr[$i];
        }
    }

    for ($i = 0; $i < count($primeArr); $i++){
        for ($j = 0; $j < count($primeArr) - $i - 1; $j++){
            if ($primeArr[$j] > $primeArr[$j+1]){
                $temp = $primeArr[$j];
                $primeArr[$j] = $primeArr[$j+1];
                $primeArr[$j+1] = $temp;
            }
        }
    }



    foreach ($primeArr as $num){
        echo $num . ' ';
    }
}




$n = fgets(STDIN);
$str = fgets(STDIN);
sortPrimeNumbers($n, $str);