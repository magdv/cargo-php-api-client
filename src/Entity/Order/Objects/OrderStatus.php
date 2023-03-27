<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-status.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Элемент справочника статусов
 * source: order/objects/order-status.json
 *
 * @property int $id
 * @property string $name
 */
final class OrderStatus extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
