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