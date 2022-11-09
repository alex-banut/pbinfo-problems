<?php

function month($n){

        switch ($n){
            case 1:
                echo 'ianuarie';
                break;
            case 2:
                echo 'februarie';
                break;
            case 3:
                echo 'martie';
                break;
            case 4:
                echo 'aprilie';
                break;
            case 5:
                echo 'mai';
                break;
            case 6:
                echo 'iunie';
                break;
            case 7:
                echo 'iulie';
                break;
            case 8:
                echo 'august';
                break;
            case 9:
                echo 'septembrie';
                break;
            case 10:
                echo 'octombrie';
                break;
            case 11:
                echo 'noiembrie';
                break;
            case 12:
                echo 'decembrie';
                break;
        }
}

$n = fgets(STDIN);

month($n);