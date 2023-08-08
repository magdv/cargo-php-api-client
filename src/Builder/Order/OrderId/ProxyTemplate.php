<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-template
 */
final class ProxyTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-template';

    public function get(): ProxyTemplateGet
    {
        return new ProxyTemplateGet($this->client, $this->getUrl());
    }
}
