<?php

$orders = [
    [
        'name' => 'Taro',
        'price' => 1200,
        'quantity' => 2,
    ],
    [
        'name' => 'Hanako',
        'price' => 800,
        'quantity' => 1,
    ], 
    [
        'name' => 'Ken',
        'price' => 800,
        'quantity' => 4,
    ],
];

function calculaterOrderTotal(int $price, int $quantity): int
{
    return $price * $quantity;
}

function orderLabel(int $total): string
{
    if($total >= 3000){
        return '高額注文';
    } 
    return '通常注文';
}

$totalAmout = 0;

foreach ($orders as $order) {
    $orderTotal = calculaterOrderTotal($order['price'], $order['quantity']);
    $label = orderLabel($orderTotal);

    echo $order['name'] . ': ' . $orderTotal . '円 / ' . $label . PHP_EOL;

    $totalAmout = $totalAmout + $orderTotal;
}

echo '合計金額：' . $totalAmout . '円' . PHP_EOL;


$purchases = [
    ['name' => 'Pen', 'price' => 120, 'quantity' => 3],
    ['name' => 'Notebook', 'price' => 260, 'quantity' => 2],
    ['name' => 'Bag', 'price' => 2800, 'quantity' => 1],
];

function calculateSubtotal(int $price, int $quantity): int
{
    return $price * $quantity;
}

function purchaseLabel(int $subtotal): string
{
    if ($subtotal >= 1000) {
        return '高額商品';
    }

    return '通常商品';
}

$totalAmount = 0;

foreach ($purchases as $purchase) {
    $subtotal = calculateSubtotal($purchase['price'], $purchase['quantity']);
    $label = purchaseLabel($subtotal);

    echo $purchase['name'] . ': ' . $subtotal . '円 / ' . $label . PHP_EOL;

    $totalAmount = $totalAmount + $subtotal;
}

echo '合計金額: ' . $totalAmount . '円' . PHP_EOL;

$students = [
    ['name' => 'Taro', 'score' => 82],
    ['name' => 'Hanako', 'score' => 95],
    ['name' => 'Ken', 'score' => 58],
];

function scoreLabel(int $score): string
{
    if($score >= 80) {
        return '合格';
    }
    return '不合格';
}

$totalScore = 0;

foreach($students as $student) {
    $label = scoreLabel($student['score']);

    echo $student['name'] . ':' . $student['score'] . '点 /' . $label . PHP_EOL;

    $totalScore = $totalScore + $student['score'];
    }
    $averageScore = $totalScore / count($students);
    
echo '合計点: ' . $totalScore . '点' . PHP_EOL;
echo '平均点: ' . $averageScore . '点' . PHP_EOL;

$items = [
    ['name' => 'Pen', 'stock'=> 12],
    ['name' => 'Notebook', 'stock'=> 0],
    ['name' => 'Bag', 'stock'=> 3],
];

function stockLabel(int $stock): string
{
    if($stock === 0) {
        return '在庫なし';
    }
    if($stock <= 5) {
        return '在庫わずか';
    }
    return '在庫あり';
}

$soldOutCount = 0;

foreach($items as $item){
    $label = stockLabel($item['stock']);

    echo $item['name'] . ':' . $item['stock'] . '個 /' . $label . PHP_EOL;

    if ($item['stock'] === 0) {
            $soldOutCount = $soldOutCount + 1;
}

    
}
echo '在庫なしの商品数: ' . $soldOutCount . '件' . PHP_EOL;