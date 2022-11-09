<?php


function paritate($n, $str){

$arr = explode(' ', $str);

$countEven = 0;
$countOdd = 0;

    for ($i = 0; $i < $n; $i++){
        if ($arr[$i] % 2 == 0 && is_numeric($arr[$i])){
            $countEven = $countEven + 1;
        } elseif ($arr[$i] % 2 != 0 && is_numeric($arr[$i])) {
            $countOdd = $countOdd + 1;
        }
    }

    if ($countEven - $countOdd < 0){
        echo ($countEven - $countOdd) * - 1;
    } else {
        echo $countEven - $countOdd;
    }



}
$n = fgets(STDIN);
$str = fgets(STDIN);

paritate($n, $str);