<?php
class Person
{
    public string $name = 'Taro';

    public  function introduce(): string
    {
        return "私は{$this->name}です。";
    }
}

class Student extends Person
{
    public string $school = 'Yado School';

    public function showSchool(): string
    {
        return "{$this->school}で学んでます。";
    }
}

$student = new Student();

echo $student->introduce();
echo PHP_EOL;
echo $student->showSchool();
echo PHP_EOL;




class Animal
{
    public string $name = "動物";

    public function speak(): string
    {
        return "{$this->name}が鳴きます";
    }
}

class Dog extends Animal
{
    public function speak(): string
    {
        return "{$this->name}がワンと鳴きます。";
    }
}

$dog = new Dog();
$dog->name = '犬';

echo $dog->speak();
echo PHP_EOL;
//echo $dog->speak();
//echo PHP_EOL;


class People
{
    public string $name = 'Taro';

    public function introduce(): string
    {
        return "私は{$this->name}です。";
    }
}

class Employee extends People
{
    public string $company = 'Yado Inc.';

    public function showCompany(): string
    {
        return "{$this->company}で働いています。";
    }
}

$employee = new Employee();

echo $employee->introduce();
echo PHP_EOL;
echo $employee->showCompany();
echo PHP_EOL;

class Product
{
    public string $name = "商品";

    public function showName(): string
    {
        return "商品名：{$this->name}";
    }
}

class Food extends Product
{
    public string $expirationDate = '2026-12-31';

    public function showExpirationDate():string
    {
        return "賞味期限：{$this->expirationDate}";
    }
}

$food = new Food();

echo $food->showName();
echo PHP_EOL;
echo $food->showExpirationDate();
echo PHP_EOL;

class Person1{
    public string $name ='Yado';

    public function introduce(): string
    {
        return "私は{$this->name}です。";
    }
}

class Students extends Person1{
    public string $school = 'PHP School';

    public function study(): string
    {
        return "{$this->school}で勉強しています。";
    }
}

$students = new Students();

echo $students->introduce();
echo PHP_EOL;
echo $students->study();
echo PHP_EOL;


