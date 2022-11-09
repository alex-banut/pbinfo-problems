<?php

function evenNumber($str){

    $arr = explode(' ', $str);

    $countEven = 0;

    for ($i = 0; $i < strlen($str) - 1; $i++){
        if ($arr[$i] == 0){
            break;
        }elseif ($arr[$i] % 2 == 0){
            $countEven = $countEven + 1;
        }
    }

    if ($countEven != 0){
        echo $countEven;
    }else{
        echo 'NU EXISTA';
    }
}

$str = fgets(STDIN);

evenNumber($str);