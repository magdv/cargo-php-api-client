<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-refuse-reason-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект причины для отказа от заказа
 * source: order/objects/order-refuse-reason-item.json
 *
 * @property string $code
 * @property string $name
 * @property string $type
 * @property bool $isComment
 */
final class OrderRefuseReasonItem extends AbstractEntity
{
    protected static $types = ['code' => ['string'], 'name' => ['string'], 'type' => ['string'], 'isComment' => ['bool']];
    protected static $nullables = ['code' => false, 'name' => false, 'type' => false, 'isComment' => false];
}
