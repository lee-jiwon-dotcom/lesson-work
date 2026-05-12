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