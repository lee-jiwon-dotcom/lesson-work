<?php
class Message1
{
    public function text(): string
    {
        return 'メッセージです。';
    }
}

class WelcomeMessage extends Message
{
    public function text():string
    {
        return 'ようこそ、PHPの学習へ';
    }
}

$message = new Message1();
$welcomMessage = new WelcomeMessage();

echo $message->text();
echo PHP_EOL;
echo $welcomMessage->text();
echo PHP_EOL;

class Animal{
    public function speak(): string
    {
        return '鳴きます。';
    }
}

class Cat extends Animal
{
    #[Override]
    public function speak(): string
    {
        return parent::speak() . 'ニャーとも鳴きます。';
    }
}

$animal = new Animal();
$cat = new Cat();

echo $animal->speak();
echo PHP_EOL;
echo $cat->speak();
echo PHP_EOL;

class Message
{
    public function text(): string
    {
        return "通常メッセージです。";
    }
}

class ErrorMessage extends Message
{
    #[Override]
    public function text(): string
    {
         return parent::text() . '内容を確認してください。';
    }
}

$errorMessage = new ErrorMessage();

echo $errorMessage->text();
echo PHP_EOL;

class User {
    public function role(): string
    {
        return "一般ユーザーです。";
    }
}

class AdminUser extends User
{
    public function role(): string
    {
        return "管理者ユーザーです。";
    }
}

$adminUser = new AdminUser();

echo $adminUser->role();
echo PHP_EOL;

class Product
{
    public function priceMessage(): string
    {
        return "通常価格です。";
    }
}

class Saleproduct extends Product
{
    #[Override]
    public function priceMessage(): string
    {
        return parent::priceMessage() . "現在セール中です。";
    }
}

$saleproduct = new SaleProduct();

echo $saleproduct->priceMessage();