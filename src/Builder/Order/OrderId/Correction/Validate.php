<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Correction;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/correction/validate
 */
final class Validate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/correction/validate';

    public function post(): ValidatePost
    {
        return new ValidatePost($this->client, $this->getUrl());
    }
}
