<?php

function calculateShippingFee(int $amount, bool $isMember): int
{
    if ($amount >= 5000) {
        return 0;
    }
    if ($isMember) {
        return 300;
    }
    return 600;
}

function buildShippingMessage(int $amount, bool $isMember, int $shippingFee): string
{
    $memberText = $isMember ? 'はい' : 'いいえ';

    return '注文金額:' . $amount . '円' . PHP_EOL
        . '会員:' . $memberText . PHP_EOL
        . '送料:' . $shippingFee . '円';
}

$orders = [
    ['amount' => 6000, 'isMember' => true],
    ['amount' => 4200, 'isMember' => true],
    ['amount' => 4200, 'isMember' => false],
];

foreach ($orders as $order) {
    $shippingFee = calculateShippingFee($order['amount'], $order['isMember']);

    echo buildShippingMessage($order['amount'], $order['isMember'], $shippingFee);
    echo PHP_EOL;
    echo PHP_EOL;
}