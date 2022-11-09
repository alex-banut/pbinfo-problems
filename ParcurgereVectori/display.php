<?php

function display($n, $str){
    $arr = explode(' ', $str);

    print_r($arr);

    $last = array_pop($arr);

    array_push($arr, $last);


    for ($i = 0; $i < $n - 1; $i++){
        if ($arr[$i] % $last == 0 && is_numeric($arr[$i])){
            echo $arr[$i] . ' ';
        }
    }
}


$n = fgets(STDIN);
$str = fgets(STDIN);

display($n, $str);