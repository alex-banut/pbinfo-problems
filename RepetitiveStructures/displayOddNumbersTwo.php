<?php

function displayOddNumbersTwo($n)
{
    for ($i = $n; $i > 0; $i--) {
        if ($i % 2 != 0) {
            echo $i . ' ';
        }
    }
}

$n = fgets(STDIN);

displayOddNumbersTwo($n);