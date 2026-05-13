<?php

$scores = [72, 88, 95, 64, 81];

$total = 0;
$highestScore = $scores[0];

foreach ($scores as $score) {
    $total += $score;

    if ($score > $highestScore) {
        $highestScore = $score;
    }
}

$average = $total / count($scores);

echo "合計： {$total}" . PHP_EOL;
echo "平均： {$average}" . PHP_EOL;
echo "最高点： {$highestScore}" . PHP_EOL;
