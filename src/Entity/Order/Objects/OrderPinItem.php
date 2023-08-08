<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа
 * source: order/objects/order-pin-item.json
 *
 * @property string $id
 * @property bool $isPin
 * @property OrderAccess $access
 */
final class OrderPinItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'isPin' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = ['id' => false, 'isPin' => false, 'access' => false];
}
