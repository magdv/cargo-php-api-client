<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/general-partner-proxy-template
 */
final class GeneralPartnerProxyTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/general-partner-proxy-template';

    public function get(): GeneralPartnerProxyTemplateGet
    {
        return new GeneralPartnerProxyTemplateGet($this->client, $this->getUrl());
    }
}
