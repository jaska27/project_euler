<?php
$number = 600851475143;

function getLargestPrimeFactor($number)
{
    $prime_factor = 2;
    $largest_prime_factor = $number;

    while ($number > 1) {
        while ($number % $prime_factor == 0) {
            $largest_prime_factor = $prime_factor;
            $number = $number / $prime_factor;
        }
        $prime_factor++;
    }

    return $largest_prime_factor;
}

echo 'Wynik: ' . getLargestPrimeFactor($number);
