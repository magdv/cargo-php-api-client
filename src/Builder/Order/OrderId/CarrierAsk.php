<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk\CarrierAskId;

/**
 * url: /api/v2/order/{orderId}/carrier-ask
 */
final class CarrierAsk extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-ask';

    public function carrierAskId(string $carrierAskId): CarrierAskId
    {
        $params = $this->params;
        $params['carrierAskId'] = $carrierAskId;
        return new CarrierAskId($params, $this->client);
    }

    public function post(): CarrierAskPost
    {
        return new CarrierAskPost($this->client, $this->getUrl());
    }

    public function delete(): CarrierAskDelete
    {
        return new CarrierAskDelete($this->client, $this->getUrl());
    }
}
