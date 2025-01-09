<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint;

/**
 * Данные для создания требования новая версия
 * source: order/OrderDowntimeClaim/requests/OrderDowntimeClaimCreateRequestV2.json
 *
 * @property \stdClass $orderId
 * @property OrderDowntimeClaimPoint[] $points
 * @property Downtime $downtime
 * @property string $type
 * @property string $date
 * @property string $number
 */
final class OrderDowntimeClaimCreateRequestV2 extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['\stdClass'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
        'type' => ['string'],
        'date' => ['string'],
        'number' => ['string'],
    ];

    protected static $nullables = [
        'orderId' => true,
        'points' => false,
        'downtime' => false,
        'type' => false,
        'date' => false,
        'number' => false,
    ];
}
