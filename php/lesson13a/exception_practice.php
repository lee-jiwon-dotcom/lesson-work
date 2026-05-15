<?php

function formatOrderPrice(string $name, int $price): string
{
    if ($price <= 0) {
       throw new Exception('金額が正しくありません。');
    }

    return $name . ': ' . $price . '円';
}

$items = [
    ['name' => 'Book', 'price' => 1200],
    ['name' => 'Pen', 'price' => 500],
    ['name' => 'Bag', 'price' => 2500],  
];

foreach ($items as $item) {
    try {
        echo formatOrderPrice($item['name'], $item['price']) . PHP_EOL;
    } catch (Exception $e) {
        echo $item['name'] . ': ' . $e->getMessage() . PHP_EOL;
    }
}

function divideNumbers(int $left, int $right): float
{
    if ($right === 0) {
       throw new Exception('0で割ることはできません。');
    }
        return $left / $right;
}
    try {
        echo divideNumbers(10, 0);
        echo PHP_EOL;
    }   catch (Exception $e) {
        echo 'エラー：' . $e->getMessage();
        echo PHP_EOL;
    }

function formatScore(int $score): string
{
    if ($score < 0 || $score > 100) {
        throw new Exception('点数の範囲が正しくありません');
    }
        return '点数 ' . $score . '点';
}

try {
    echo formatScore(0);
    echo PHP_EOL;
}   catch (Exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}

function formatProductPrice(string $name,int $price): string
{
    if($price <= 0){
        throw new Exception('価格が正しくありません。');
    }
    return $name . ':' . $price . '円';
}
   $products = [
    ['name' => 'Coffee', 'price' => 500],
    ['name' => 'Tea', 'price' => 0],
    ['name' => 'Cake', 'price' => 700],
];  

    foreach($products as $product) {
        try{
          echo formatProductPrice($product['name'], $product['price']) . PHP_EOL;
     } catch (Exception $e) {
         echo $product['name'] . ': ' . $e->getMessage() . PHP_EOL;
     }
}


function formatUserName(string $name): string
{
    if($name === ''){
        throw new Exception('名前が入力されていません。');
    }
    return 'こんにちは、' .$name . 'さん！';
}

$names = ['Yado', '', 'Taro'];

foreach($names as $name) {
    try{
        echo formatUserName($name) . PHP_EOL;
    }   catch (Exception $e) {
        echo $e ->getMessage() . PHP_EOL;
    }
}

function formatStock(string $name, int $stock): string
{
    if ($stock < 0) {
        throw new Exception('在庫数が正しくありません');
    }

    return $name . ': ' . $stock . '個';
}

$stockItems = [
    ['name' => 'Pen', 'stock' => 12],
    ['name' => 'Notebook', 'stock' => -1],
    ['name' => 'Eraser', 'stock' => 2],
];

foreach ($stockItems as $item) {
    try {
        echo formatStock($item['name'], $item['stock']) . PHP_EOL;
    } catch (Exception $e) {
        echo $item['name'] . ': ' . $e->getMessage() . PHP_EOL;
    }
}