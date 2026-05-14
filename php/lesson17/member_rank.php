<?php

class Member
{
    public string $name;
    public int $point;

    public function __construct(string $name, int $point)
    {
        $this->name = $name;
        $this->point = $point;
    }
    
    public function rank(): string
    {
        if ($this->point >= 1000) {
            return 'Gold';
        }
        if ($this->point >= 500) {
            return 'Silver';
        }
        return 'Bronze';
    }

    public function profile(): string
    {
        return $this->name . ' :' . $this->rank();
    }
}

$members = [
    new Member('Taro', 1200),
    new Member('Hanako', 700),
    new Member('Ken', 300),
];

foreach($members as $member)
{
    echo $member->profile() . PHP_EOL;
}

class Member1
{
    public string $name;
    public int $point;

    public function __construct(string $name, int $point)
    {
       $this -> name = $name;
       $this -> point = $point;
    }

        public function showInfo(): string
        {
            return $this->name . 'さんのポイントは' . $this -> point . 'ptです。';
        }
}

$members = [
    new Member1('Tana', 1200),
    new Member1('Jiwon', 12030),
    new Member1('Yuri', 1200),
    new Member1('YOON', 100),
    new Member1('HANA', 20)
];

foreach ($members as $member) {
    echo $member -> showInfo() . PHP_EOL;
}


class Product
{
    public string $name;
    public int $price;

    public function __construct(string $name, int $price)
    {
        $this -> name = $name;
        $this -> price = $price;
    }

    public function showPrice(): string
    {
        return $this -> name . "の価格は" . $this -> price. "円です。";
    }
 }
$product = new Product('りんご', 150);
echo $product -> showPrice() . PHP_EOL;