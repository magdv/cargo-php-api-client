<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint;

/**
 * Общие поля претензии о простое по заявке
 * source: order/OrderDowntimeClaim/mixins/OrderDowntimeCommonMixin.json
 *
 * @property \stdClass $orderId
 * @property OrderDowntimeClaimPoint[] $points
 * @property Downtime $downtime
 * @property string $type
 */
final class OrderDowntimeCommonMixin extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['\stdClass'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
        'type' => ['string'],
    ];

    protected static $nullables = ['orderId' => true, 'points' => false, 'downtime' => false, 'type' => false];
}
