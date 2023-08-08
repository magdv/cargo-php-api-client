<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/validate-ecn-data
 */
final class ValidateEcnData extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/validate-ecn-data';

    public function post(): ValidateEcnDataPost
    {
        return new ValidateEcnDataPost($this->client, $this->getUrl());
    }
}
