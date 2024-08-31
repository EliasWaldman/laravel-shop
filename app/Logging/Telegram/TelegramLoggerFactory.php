<?php

namespace App\Logging\Telegram;
use Monolog\Logger;

class TelegramLoggerFactory
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('telegram');
        $logger->pushHandler(new TelegramLoggerHandler($config));

        return $logger;
    }
}
//В теле функции указываем название нашего канала, внашем случае это Телеграм
