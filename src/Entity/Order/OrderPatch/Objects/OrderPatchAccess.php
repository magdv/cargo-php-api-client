<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заявке на изменение заказа
 * source: order/OrderPatch/objects/order-patch-access.json
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
