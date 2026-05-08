<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . PHP_EOL;
}

$fruits = ['apple', 'banana', 'orange'];

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}

//문제 1
for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
}

//문제 2
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . PHP_EOL;
    }
}

//문제 3
$fruits = ['apple', 'banana', 'orange'];

foreach ($fruits as $index => $fruit){
    echo $fruit . PHP_EOL;
}

//문제 4
$prices = [100, 250, 300];

$total = 0;

foreach ($prices as $price) {
    $total = $total +$price;
}   
echo '금액은' . $total . '원입니다.' . PHP_EOL;
    
//문제 5
for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
    
    if ($i === 3) {
        break;
    }
}