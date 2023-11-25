<?php

require __DIR__ . '/vendor/autoload.php';

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Properties\MessageType;

// Ganti TOKEN_BOT_ANDA dengan token bot yang kamu dapatkan dari BotFather
$token = 'TOKEN_BOT';

$bot = new Nutgram($token);

$bot->onCommand('start', function(Nutgram $bot) {
    $bot->sendMessage('Halo! Selamat datang 😊');
});

$bot->onText('hello', function(Nutgram $bot) {
    $bot->sendMessage('Hello, how are you? 🌈');
});

$bot->onMessageType(MessageType::PHOTO, function (Nutgram $bot) {
    $photos = $bot->message()->photo;
    $bot->sendMessage('Nice pic!');
});

$bot->run();
