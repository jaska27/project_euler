<?php
$position = 10001;

function isPrime($value)
{
    if($value<2){
        return false;
    } else {
        for ($i = 2; $i < $value; $i++) {
            if ($value % $i == 0) return false;
        }
    }

    return true;
}

function getPrimeByPosition($position)
{
    $prime = 2;
    $primePosition = 0;

    while ($primePosition < $position) {
        if(isPrime($prime)){
            $prime++;
            $primePosition++;
        } else {
            $prime++;
        }
    }

    return --$prime;
}

echo 'Wynik: ' . getPrimeByPosition($position);
