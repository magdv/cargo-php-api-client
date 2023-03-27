<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-condition.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект дополнительный условий заказа
 * source: order/objects/order-condition.json
 *
 * @property string $id
 * @property string $name
 */
final class OrderCondition extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
