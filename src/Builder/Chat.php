<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Chat\ChatId;

/**
 * url: /api/v2/chat
 */
final class Chat extends AbstractBuilder
{
    protected const URL = '/api/v2/chat';

    public function chatId(string $chatId): ChatId
    {
        $params = $this->params;
        $params['chatId'] = $chatId;
        return new ChatId($params, $this->client);
    }
}
