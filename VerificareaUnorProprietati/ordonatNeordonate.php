<?php

function orderedUnordered($n, $str){
    $arr = explode(' ', $str);

    $crescator = 0;

    $descrescator = 0;

    $egale = 0;


    for ($i = 0; $i < $n-1; $i++){
        if ($arr[$i] < $arr[$i+1]){
            $crescator++;
        }elseif ($arr[$i] == $arr[$i+1]){
            $egale++;
        }elseif ($arr[$i] > $arr[$i+1]){
            $descrescator++;
        }
    }

    if ($descrescator == 0 && $egale == 0){
        echo "șir strict crescător";
    }elseif ($crescator == 0 && $egale == 0){
        echo "sir strict descrescator";
    }elseif ($crescator == 0 && $descrescator == 0){
        echo " sir constant";
    }elseif ($descrescator == 0 && $egale >= 1){
        echo "sir crescator";
    }elseif ($crescator == 0 && $egale >= 1){
        echo "sir descrescator";
    } elseif($descrescator >= 1 && $crescator >= 1) {
        echo "sir neordonat";
    } elseif($descrescator >=1 && $egale >=1){
        echo "sir neordonat";
    } elseif ($descrescator >=1 && $egale >= 1 && $crescator >=1){
        echo "sir neordonat";
    }

    echo $crescator;
    echo $descrescator;
    echo $egale;
}

$n = fgets(STDIN);
$str = fgets(STDIN);
orderedUnordered($n, $str);