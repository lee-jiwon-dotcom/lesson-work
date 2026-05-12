<?php
class Message
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

$message = new Message();
$welcomMessage = new WelcomeMessage();

echo $message->text();
echo PHP_EOL;
echo $welcomMessage->text();
echo PHP_EOL;