<?php
$max = 4000000;
$start_num_1 = 1;
$start_num_2 = 2;

function getSumOfFibonacci($start_num_1, $start_num_2, $max)
{
    $sum = 0;
    while ($start_num_2 < $max) {
        if ($start_num_2 % 2 == 0)
            $sum = $sum + $start_num_2;
        $sum_temp = $start_num_1 + $start_num_2;
        $start_num_1 = $start_num_2;
        $start_num_2 = $sum_temp;
    }
    return $sum;
}

echo 'Wynik: ' . getSumOfFibonacci($start_num_1, $start_num_2, $max);
