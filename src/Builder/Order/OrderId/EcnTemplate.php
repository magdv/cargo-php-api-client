<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/ecn-template
 */
final class EcnTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/ecn-template';

    public function get(): EcnTemplateGet
    {
        return new EcnTemplateGet($this->client, $this->getUrl());
    }
}
