<?php

function ordonareVector($n, $str){

    $arr = explode(' ', $str);

    for ($i = 0; $i < $n; $i++){
        for ($j = 0; $j < $n - $i - 1; $j++){
            if ($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }

    foreach ($arr as $number){
        echo $number . ' ';
    }

}


$n = 5;
$str = '3 2000 1 1 2';
ordonareVector($n, $str);




