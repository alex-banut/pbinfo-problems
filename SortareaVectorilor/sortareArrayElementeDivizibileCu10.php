<?php

function sortareElementDivizibile($n, $str){
    $arrAll = explode(' ', $str);

    $arr = [];

    for ($i = 0; $i < $n; $i++){
        if($arrAll[$i] % 10 == 0){
            $arr[] = $arrAll[$i];
        }
    }

    if (empty($arr)){
        echo "NU EXISTA";
    }

    for ($i = count($arr) - 1 ; $i >= 0; $i--){
        for ($j = count($arr) - 1; $j >= count($arr) - $i; $j--){
            if ($arr[$j] > $arr[$j-1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $temp;
            }
        }
    }

    foreach ($arr as $element){
        echo $element . ' ';
    }
    
    
}

$n = fgets(STDIN);
$str = fgets(STDIN);
sortareElementDivizibile($n, $str);