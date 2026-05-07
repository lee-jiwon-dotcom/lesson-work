<?php
function formatUserName(string $name): string
{
    return strtoupper($name) . 'さん';
}

echo formatUserName('taro');
echo PHP_EOL;