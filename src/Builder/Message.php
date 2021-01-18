<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Message\Count;
use Cargomart\ApiClient\Builder\Message\Id;
use Cargomart\ApiClient\Builder\Message\MarkAllAsRead;

/**
 * url: /api/v2/message
 */
final class Message extends AbstractBuilder
{
    protected const URL = '/api/v2/message';

    public function count(): Count
    {
        return new Count($this->params, $this->client);
    }

    public function markAllAsRead(): MarkAllAsRead
    {
        return new MarkAllAsRead($this->params, $this->client);
    }

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): MessageGet
    {
        return new MessageGet($this->client, $this->getUrl());
    }
}
