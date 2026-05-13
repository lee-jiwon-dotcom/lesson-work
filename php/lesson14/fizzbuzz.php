<?php

for ($i = 1; $i <= 30; $i++) {
    if($i % 15 === 0 ) {
        echo "fizzbuzz";
    } elseif ($i % 3 === 0) {
        echo "fizz";
    }   elseif ($i % 5 === 0) {
        echo "buzz";
    }   else {
        echo $i;
    }
        echo PHP_EOL;
    }