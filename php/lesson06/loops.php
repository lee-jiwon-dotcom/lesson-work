<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . PHP_EOL;
}

$fruits = ['apple', 'banana', 'orange'];

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}


for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
}


for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . PHP_EOL;
    }
}


$fruits = ['apple', 'banana', 'orange'];

foreach ($fruits as $index => $fruit){
    echo $fruit . PHP_EOL;
}


$prices = [100, 250, 300];

$total = 0;

foreach ($prices as $price) {
    $total = $total +$price;
}   
echo '金額は' . $total . '円です。' . PHP_EOL;


for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
    
    if ($i === 3) {
        break;
    }
}