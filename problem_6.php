<?php
$quantity = 100;

function getSumOfSquares($quantity)
{
    $sum = 0;
    for ($i = 1; $i <= $quantity; $i++) {
        $sum = $sum + pow($i,2);
    }
    return $sum;
}

function getSquareOfSum($quantity)
{
    $square = 0;
    for ($i = 1; $i <= $quantity; $i++) {
        $square = $square + $i;
    }
    return pow($square,2);
}

function getSumSquareDifference($quantity)
{
    if ($quantity > 0)
        return getSquareOfSum($quantity) - getSumOfSquares($quantity);
    return null;
}

echo 'Wynik: ' . getSumSquareDifference($quantity);
