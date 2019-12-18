<?php

declare(strict_types=1);

namespace Shared\Infrastructure\Queue\RabbitMq;

final class RabbitMqExchangeNameFormatter
{
    public static function retry(string $exchangeName): string
    {
        return 'retry-' . $exchangeName;
    }

    public static function deadLetter(string $exchangeName): string
    {
        return 'dead_letter-' . $exchangeName;
    }
}
