<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные запроса на изменение заказа
 * source: order/objects/order-patch-item.json
 *
 * @property string $id
 * @property int $statusId
 * @property string $reason
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 * @property string $createDate
 * @property int $creatorId
 * @property string $updateDate
 * @property string $orderId
 * @property \stdClass $oldValues
 * @property \stdClass $newValues
 * @property OrderPatchAccess $access
 */
final class OrderPatchItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'statusId' => ['int'],
        'reason' => ['string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
        'createDate' => ['string'],
        'creatorId' => ['int'],
        'updateDate' => ['string'],
        'orderId' => ['string'],
        'oldValues' => ['\stdClass'],
        'newValues' => ['\stdClass'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'statusId' => false,
        'reason' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
        'createDate' => false,
        'creatorId' => false,
        'updateDate' => false,
        'orderId' => false,
        'oldValues' => true,
        'newValues' => true,
        'access' => false,
    ];
}
