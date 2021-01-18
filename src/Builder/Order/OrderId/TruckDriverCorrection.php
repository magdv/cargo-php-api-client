<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverCorrection\Approve;
use Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverCorrection\Reject;

/**
 * url: /api/v2/order/{orderId}/truck-driver-correction
 */
final class TruckDriverCorrection extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/truck-driver-correction';

    public function reject(): Reject
    {
        return new Reject($this->params, $this->client);
    }

    public function approve(): Approve
    {
        return new Approve($this->params, $this->client);
    }

    public function post(): TruckDriverCorrectionPost
    {
        return new TruckDriverCorrectionPost($this->client, $this->getUrl());
    }

    public function get(): TruckDriverCorrectionGet
    {
        return new TruckDriverCorrectionGet($this->client, $this->getUrl());
    }

    public function delete(): TruckDriverCorrectionDelete
    {
        return new TruckDriverCorrectionDelete($this->client, $this->getUrl());
    }
}
