<?php
function formatUserName1(string $name): string
{
    return strtoupper($name) . 'さん';
}

echo formatUserName1('taro');
echo PHP_EOL;

function createWelcomeMessage(string $name): string
{
    return 'ようこそ,' .strtoupper($name) .'さん';
}

echo createWelcomeMessage('Taro');
echo PHP_EOL;

function formatPrice(int $price): string
{
    return $price . "円";
}

echo formatPrice(1200);
echo PHP_EOL;


function formatUserName(string $name, string $suffix): string
{
    return strtoupper($name) . $suffix;
}

echo formatUserName('taro', '様');
echo PHP_EOL;

function createProfileText(string $name, int $age): string
{
    return "私は" .$name."です." .$age. "歳です。";
}

echo createProfileText('Yado', 20);
echo PHP_EOL;

function formatScoreMessage(int $score): string
{
    if ($score >= 80) {
        return "合格です。";
    } else {
        return "再チャレンジです。";
    }
}

echo formatScoreMessage(85);
echo PHP_EOL;