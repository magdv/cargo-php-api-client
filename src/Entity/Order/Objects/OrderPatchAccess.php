<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-patch-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заявке на изменение заказа
 * source: order/objects/order-patch-access.json
 *
 * @property bool $view
 * @property bool $createApprove
 * @property bool $createReject
 * @property bool $createCancel
 */
final class OrderPatchAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'createApprove' => ['bool'],
        'createReject' => ['bool'],
        'createCancel' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'createApprove' => false,
        'createReject' => false,
        'createCancel' => false,
    ];
}
