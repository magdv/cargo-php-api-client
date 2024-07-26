<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/OrderDowntimeClaim/objects/order-downtime-claim.json#/properties/access
 *
 * @property bool $createCancel
 * @property bool $createPreview
 * @property bool $createSign
 * @property bool $createReject
 * @property bool $createApprove
 */
final class OrderDowntimeClaimAccess extends AbstractEntity
{
    protected static $types = [
        'createCancel' => ['bool'],
        'createPreview' => ['bool'],
        'createSign' => ['bool'],
        'createReject' => ['bool'],
        'createApprove' => ['bool'],
    ];

    protected static $nullables = [
        'createCancel' => false,
        'createPreview' => false,
        'createSign' => false,
        'createReject' => false,
        'createApprove' => false,
    ];
}
