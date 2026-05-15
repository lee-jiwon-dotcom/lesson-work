<?php
class Product
{
    public string $name;
    public int $price;
    public int $stock;


public function __construct(string $name, int $price, int $stock)
    {
    $this->name = $name;
    $this->price = $price;
    $this->stock = $stock;
    }
    public function isAvailable(): bool
    {
        return $this->stock > 0;
    }
    public function cardText(): string
    {
        if ($this->isAvailable()){
            $stockText = '在庫あり';
        }   else {
            $stockText = '在庫なし';
        }

        return $this->name . ' / ' . $this->price . '円/ '. $stockText;
    }
}

$products = [
    new Product('Pen', 120, 12),
    new Product('Notebook', 260, 0),
    new Product('Bag', 2800, 3),
];
foreach ($products as $product) {
    echo $product->cardText() . PHP_EOL;
}