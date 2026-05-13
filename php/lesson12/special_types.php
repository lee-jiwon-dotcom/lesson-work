<?php

// NULL 판정
$value = null;
var_dump(is_null($value));

// callable 확인
function greet()
{
    return 'Hello';
}
$func = 'greet';
var_dump(is_callable($func));

// resource 확인
$handle = fopen('php://memory', 'r+');
var_dump(is_resource($handle));
fclose($handle);