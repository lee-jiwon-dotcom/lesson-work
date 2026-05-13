<?php

$products = [
    ['name' => 'Pen', 'stock' => 12],
    ['name' => 'Notebook', 'stock' => 4],
    ['name' => 'Eraser', 'stock' => 2],
    ['name' => 'Bag', 'stock' => 8],
];

function isLowStock(int $stock): bool
{
    return $stock <= 5;
}

$alertCount = 0;

echo '在庫フラート' . PHP_EOL;

foreach ($products as $product) {
    if (isLowStock($product['stock'])) {
        echo $product['name'] . ':' . $product['stock'] . '個'. PHP_EOL;
        $alertCount++;
    }
}

echo '対象件数: ' . $alertCount . '件' . PHP_EOL;
    