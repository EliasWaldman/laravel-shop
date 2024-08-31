<?php

namespace App\Services\Telegram;

use Illuminate\Support\Facades\Http;

class TelegramBotApi
{
    public const HOST = 'https://api.telegram.org/bot';
    public static function sendMessage(string $token, int $chatId, string $text)
    {
        Http::get(self::HOST . $token . '/sendMessage', [  //Вместо $token должно быть $chatId(но это не точно)            'chat_id' => $chatId,
            'chat_id' => $chatId,
            'text' => $text
        ]);
    }
}
