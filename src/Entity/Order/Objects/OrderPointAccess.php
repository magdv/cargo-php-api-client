<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-point-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу
 * source: order/objects/order-point-access.json
 *
 * @property bool $update
 * @property bool $delete
 * @property bool $view
 */
final class OrderPointAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool'], 'view' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false, 'view' => false];
}
