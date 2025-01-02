<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\BrokerInfoItem;

/**
 * source: order/Common/responses/broker-list-response.json#/properties/data
 *
 * @property BrokerInfoItem[] $broker
 */
final class BrokerListResponseData extends AbstractEntity
{
    protected static $types = ['broker' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\BrokerInfoItem']];
    protected static $nullables = ['broker' => false];
}
