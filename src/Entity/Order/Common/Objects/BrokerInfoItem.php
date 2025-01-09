<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект брокера
 * source: order/Common/objects/broker-info-item.json
 *
 * @property string $orderId
 * @property float $minBid
 * @property string $statusAlias
 */
final class BrokerInfoItem extends AbstractEntity
{
    protected static $types = ['orderId' => ['string'], 'minBid' => ['float'], 'statusAlias' => ['string']];
    protected static $nullables = ['orderId' => false, 'minBid' => false, 'statusAlias' => false];
}
