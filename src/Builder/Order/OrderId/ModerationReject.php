<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/moderation-reject
 */
final class ModerationReject extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/moderation-reject';

    public function post(): ModerationRejectPost
    {
        return new ModerationRejectPost($this->client, $this->getUrl());
    }
}
