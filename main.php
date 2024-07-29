<?php

function factorial(int $value): int
{
    return array_reduce(range($value, 1), fn ($previous, $current) => $current * $previous, 1);
}

function calculateCombinations(int $elements, int $taken): int
{
    return factorial($elements) / factorial($taken) * factorial($elements - $taken);
}

print_r(
    calculateCombinations(elements: 3, taken: 2)
);
