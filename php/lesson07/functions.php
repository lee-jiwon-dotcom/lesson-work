<?php
function sumNumbers(int $left, int $right): int
{
    return $left + $right;
}

echo sumNumbers(3, 5);
echo PHP_EOL;

function multiplyNumbers(int $left, int $right): int
{
    return $left * $right;
}

echo multiplyNumbers(4, 6);
echo PHP_EOL;

function createGreeting(string $name): string
{
    return $name . "こんにちは!";
}

echo createGreeting('Yado');
echo PHP_EOL;

function judgeScore(int $score): string
{
    if ($score >= 80) {
        return "合格です！";
    }
    return "不合格です！";
}
echo judgeScore(79);
echo PHP_EOL;

function addTax(int $price): int
{
    return $price * 1.1;
}

echo addTax(1000);  
echo PHP_EOL;

function sumPrices(array $prices): int
{
    $total = 0;

    foreach ($prices as $price) {
        $total = $total + $price;
    }

        return $total;
}
echo sumPrices([100, 200, 300]);
echo PHP_EOL;