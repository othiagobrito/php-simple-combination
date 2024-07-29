<?php

function factorial(int $value, int $rangeEnd = 1): int
{
    return array_reduce(range($value, $rangeEnd), fn ($previous, $current) => $current * $previous, 1);
}

function calculateCombinations(int $elements, int $taken): int
{
    return factorial($elements, $elements - ($taken - 1)) / factorial($taken);
}

print_r(
    calculateCombinations(elements: 60, taken: 6)
);
