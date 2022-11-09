<?php


function grades($n)
{
    if ($n < 5 && $n < 10) {
        echo 'corigent';
    } else {
        echo 'promovat';
    }
}

$n = fgets(STDIN);
grades($n);