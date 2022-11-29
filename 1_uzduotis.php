<?php  
/*
1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1(array $numbers)
{
    $evenNumbersSum = array_sum(array_filter($numbers, function($evenNumbers) {
        return $evenNumbers % 2 == 0;
    }));
    return $evenNumbersSum;
};
echo 'Visų lyginių skaičių suma yra ' . exercises1($numbers) . PHP_EOL;
