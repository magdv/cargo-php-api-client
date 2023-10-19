<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/check-digital-ecn-access
 */
final class CheckDigitalEcnAccess extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/check-digital-ecn-access';

    public function get(): CheckDigitalEcnAccessGet
    {
        return new CheckDigitalEcnAccessGet($this->client, $this->getUrl());
    }
}
