<?php
$max_number = 999;

function isPalindrom($value)
{
    if ($value == strrev($value)) return true;
    return false;
}

function getLargestPalindrom($value)
{

    $largest_palindrom = null;

    for ($i = $value; $i > 0; $i--) {
        for ($j = $value; $j > 0; $j--) {
            $product = $i * $j;
            if (isPalindrom($product)) {
                if ($product > $largest_palindrom) $largest_palindrom = $product;
            }
        }
    }

    return $largest_palindrom;
}

echo 'Wynik: ' . getLargestPalindrom($max_number);
