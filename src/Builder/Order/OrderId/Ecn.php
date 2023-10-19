<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/ecn
 */
final class Ecn extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/ecn';

    public function get(): EcnGet
    {
        return new EcnGet($this->client, $this->getUrl());
    }

    public function post(): EcnPost
    {
        return new EcnPost($this->client, $this->getUrl());
    }
}
