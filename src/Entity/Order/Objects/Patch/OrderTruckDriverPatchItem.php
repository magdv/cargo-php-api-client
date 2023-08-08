<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects\Patch;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchAccess;
use Cargomart\ApiClient\Entity\Order\Objects\OrderTruckDriverPatchDiffItem;

/**
 * Данные запроса на изменение заказа
 * source: order/objects/patch/order-truck-driver-patch-item.json
 *
 * @property string $id
 * @property string $type
 * @property int $statusId
 * @property string $reason
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 * @property string $createDate
 * @property int $creatorId
 * @property string $updateDate
 * @property string $orderId
 * @property OrderTruckDriverPatchDiffItem $oldValues
 * @property OrderTruckDriverPatchDiffItem $newValues
 * @property OrderPatchAccess $access
 */
final class OrderTruckDriverPatchItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'type' => ['string'],
        'statusId' => ['int'],
        'reason' => ['string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
        'createDate' => ['string'],
        'creatorId' => ['int'],
        'updateDate' => ['string'],
        'orderId' => ['string'],
        'oldValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruckDriverPatchDiffItem'],
        'newValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruckDriverPatchDiffItem'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'type' => false,
        'statusId' => false,
        'reason' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
        'createDate' => false,
        'creatorId' => false,
        'updateDate' => false,
        'orderId' => false,
        'oldValues' => false,
        'newValues' => false,
        'access' => false,
    ];
}
