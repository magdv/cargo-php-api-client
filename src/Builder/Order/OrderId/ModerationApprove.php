<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/moderation-approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/moderation-approve
 */
final class ModerationApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/moderation-approve';

    public function post(): ModerationApprovePost
    {
        return new ModerationApprovePost($this->client, $this->getUrl());
    }
}
