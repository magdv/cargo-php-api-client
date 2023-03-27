<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/broker-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\BrokerInfoItem;

/**
 * source: order/responses/broker-response.json#/properties/data
 *
 * @property BrokerInfoItem $broker
 */
final class BrokerResponseData extends AbstractEntity
{
    protected static $types = ['broker' => ['Cargomart\ApiClient\Entity\Order\Objects\BrokerInfoItem']];
    protected static $nullables = ['broker' => false];
}
