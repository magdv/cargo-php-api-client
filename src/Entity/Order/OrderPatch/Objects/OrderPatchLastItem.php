<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по последнему запросу на изменение заказа.
 * source: order/OrderPatch/objects/order-patch-last-item.json
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
 * @property OrderPatchAccess $access
 */
final class OrderPatchLastItem extends AbstractEntity
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
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchAccess'],
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
        'access' => false,
    ];
}
