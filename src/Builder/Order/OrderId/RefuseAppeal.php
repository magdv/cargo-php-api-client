<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refuse-appeal
 */
final class RefuseAppeal extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refuse-appeal';

    public function post(): RefuseAppealPost
    {
        return new RefuseAppealPost($this->client, $this->getUrl());
    }
}
