<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/worker/{id}/chat
 */
final class Chat extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}/chat';

    public function get(): ChatGet
    {
        return new ChatGet($this->client, $this->getUrl());
    }
}
