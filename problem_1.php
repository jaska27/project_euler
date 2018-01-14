<?php
$max = 1000;
$numbers = array(3, 5);

function isDivisible($value, $dev)
{
    if ($value % $dev == 0) return true;
    return false;
}

function getSumOfMultiples($numbers, $max)
{
    $multiples = array();
    $sum = 0;
    foreach ($numbers as $number) {
        for ($i = 0; $i < $max; $i++) {
            if (isDivisible($i, $number) && !in_array($i, $multiples)) {
                array_push($multiples, $i);
                $sum = $sum + $i;
            }
        }
    }
    return $sum;
}

echo 'Wynik: ' . getSumOfMultiples($numbers, $max);
