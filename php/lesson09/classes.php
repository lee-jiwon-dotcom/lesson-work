<?php
class User
{
    public string $name = 'Yado';
    public int $age = 20;

    public function greet(): string
    {
        return "こんにちは、私は{$this->name}です。";
    }

    public function introduce(): string
    {
        return "{$this->age}歳です。よろしくお願いします！";
    }
}

$user1 = new User();

$user2 = new User();
$user2->name = 'Taro';
$user2->age = 25;

echo $user1->greet();
echo PHP_EOL;
echo $user1->introduce();
echo PHP_EOL;

echo $user2->greet();
echo PHP_EOL;
echo $user2->introduce();
echo PHP_EOL;

class Product
{
    public string $name = 'Coffee';
    public int $price = 500;

    public function showName(): string
    {
        return "商品名: {$this->name}";
    }

    public function showInfo(): string
    {
        return "{$this->name}は{$this->price}円です。";
    }
}

$product = new Product();

echo $product->showName();
echo PHP_EOL;
echo $product->showInfo();
echo PHP_EOL;