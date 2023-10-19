<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Chat;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/chat/{chatId}
 */
final class ChatId extends AbstractBuilder
{
    protected const URL = '/api/v2/chat/{chatId}';

    public function get(): ChatIdGet
    {
        return new ChatIdGet($this->client, $this->getUrl());
    }
}
