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
 * @property OrderPatchDiffItem $oldValues
 * @property OrderPatchDiffItem $newValues
 * @property int $statusId
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 * @property string $rejectionReason
 * @property string $cancellationReason
 * @property OrderPatchAccess $access
 */
final class OrderPatchItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'oldValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchDiffItem'],
        'newValues' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchDiffItem'],
        'statusId' => ['int'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
        'rejectionReason' => ['string'],
        'cancellationReason' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'oldValues' => false,
        'newValues' => false,
        'statusId' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
        'rejectionReason' => false,
        'cancellationReason' => false,
        'access' => false,
    ];
}
