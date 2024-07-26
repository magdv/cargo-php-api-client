<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект претензии о простое по заявке
 * source: order/OrderDowntimeClaim/objects/order-downtime-claim.json
 *
 * @property \stdClass $id
 * @property Downtime $downtime
 * @property string $status
 * @property OrderDowntimeClaimPoint[] $points
 * @property OrderDowntimeClaimProof $proof
 * @property OrderDowntimeClaimFile $file
 * @property \stdClass $expeditorRejectReason
 * @property OrderDowntimeClaimAccess $access
 */
final class OrderDowntimeClaim extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
        'status' => ['string'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint'],
        'proof' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimProof'],
        'file' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimFile'],
        'expeditorRejectReason' => ['\stdClass'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimAccess'],
    ];

    protected static $nullables = [
        'id' => true,
        'downtime' => false,
        'status' => false,
        'points' => false,
        'proof' => false,
        'file' => false,
        'expeditorRejectReason' => true,
        'access' => false,
    ];
}
