<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/moderation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/moderation
 */
final class Moderation extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/moderation';

    public function post(): ModerationPost
    {
        return new ModerationPost($this->client, $this->getUrl());
    }

    public function delete(): ModerationDelete
    {
        return new ModerationDelete($this->client, $this->getUrl());
    }
}
