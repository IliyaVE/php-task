<?php

echo "Enter number: \n";

$value = readline();

function randGen(): array
{
    $arr = [];

    for ($x = 0; $x < 10; $x++) {
        $arr[$x] = rand(1,1000);
    }

    return $arr;
}

$arr = randGen();

print_r($arr);

echo in_array($value, $arr) ? 'found' : 'not found';
