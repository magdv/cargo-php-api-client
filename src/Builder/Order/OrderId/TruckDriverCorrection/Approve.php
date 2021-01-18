<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverCorrection;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/truck-driver-correction/approve
 */
final class Approve extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/truck-driver-correction/approve';

    public function post(): ApprovePost
    {
        return new ApprovePost($this->client, $this->getUrl());
    }
}
