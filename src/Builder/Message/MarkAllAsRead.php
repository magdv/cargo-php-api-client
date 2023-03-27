<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/message/mark-all-as-read
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Message;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/message/mark-all-as-read
 */
final class MarkAllAsRead extends AbstractBuilder
{
    protected const URL = '/api/v2/message/mark-all-as-read';

    public function post(): MarkAllAsReadPost
    {
        return new MarkAllAsReadPost($this->client, $this->getUrl());
    }
}
