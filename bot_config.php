<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

ini_set('memory_limit', '512M'); // Aumenta o limite de memória

$config = require 'config.php';

$telegram = new Api($config['telegram_bot_token']);

echo "Memória utilizada antes de obter as atualizações: " . memory_get_usage() . " bytes\n";

$updates = $telegram->getWebhookUpdates();

echo "Memória utilizada após obter as atualizações: " . memory_get_usage() . " bytes\n";

foreach ($updates as $update) {
    $chatId = $update->getMessage()->getChat()->getId();
    $message = $update->getMessage()->getText();

    echo "Memória utilizada antes de enviar a mensagem: " . memory_get_usage() . " bytes\n";

    if ($message == '/start') {
        $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => 'Hello! Welcome to our bot.'
        ]);
    } else {
        $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => 'You said: ' . $message
        ]);
    }

    echo "Memória utilizada após enviar a mensagem: " . memory_get_usage() . " bytes\n";
    unset($chatId, $message); // Liberar memória
}

echo "Pico de memória utilizado: " . memory_get_peak_usage() . " bytes\n";
